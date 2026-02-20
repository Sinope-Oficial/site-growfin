<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminCommand extends Command
{
    protected $signature = 'admin:create
                            {--name= : Nome do administrador}
                            {--email= : E-mail do administrador}
                            {--password= : Senha (mín. 6 caracteres)}';

    protected $description = 'Cria um novo usuário administrador';

    public function handle(): int
    {
        $name = $this->option('name');
        $email = $this->option('email');
        $password = $this->option('password');

        if ($this->option('no-interaction')) {
            if (!$name || !$email || !$password) {
                $this->error('No modo não interativo, informe: --name, --email e --password');
                return Command::FAILURE;
            }
        } else {
            $name = $name ?? $this->ask('Nome');
            $email = $email ?? $this->ask('E-mail');
            $password = $password ?? $this->secret('Senha');
        }

        $validator = Validator::make(
            compact('name', 'email', 'password'),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6',
            ],
            [
                'name.required' => 'Nome é obrigatório.',
                'email.required' => 'E-mail é obrigatório.',
                'email.email' => 'E-mail inválido.',
                'password.required' => 'Senha é obrigatória.',
                'password.min' => 'Senha deve ter no mínimo 6 caracteres.',
            ]
        );

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return Command::FAILURE;
        }

        $user = User::where('email', $email)->first();

        if ($user) {
            $update = $this->option('no-interaction')
                ? true
                : $this->confirm("Usuário com e-mail {$email} já existe. Deseja atualizar a senha?");
            if (!$update) {
                $this->info('Operação cancelada.');
                return Command::SUCCESS;
            }
            $user->password = Hash::make($password);
            $user->name = $name;
            $user->save();
            $this->info("Administrador atualizado: {$email}");
            return Command::SUCCESS;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("Administrador criado com sucesso: {$email}");
        return Command::SUCCESS;
    }
}
