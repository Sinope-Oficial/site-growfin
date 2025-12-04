# GrowFin - Aplicação Laravel

Esta aplicação Laravel foi criada a partir do site estático GrowFin, adicionando funcionalidades de formulário e painel de controle.

## Estrutura Criada

### Controllers
- `HomeController` - Página inicial
- `FormController` - Processamento de formulários
- `DashboardController` - Painel de controle (protegido)
- `Auth/LoginController` - Autenticação

### Models
- `Form` - Model para formulários enviados
- `User` - Model de usuários (já existe no Laravel)

### Migrations
- `create_forms_table` - Tabela para armazenar formulários

### Views
- `layouts/app.blade.php` - Layout principal
- `home/index.blade.php` - Página inicial
- `auth/login.blade.php` - Página de login
- `dashboard/index.blade.php` - Dashboard com lista de formulários
- `dashboard/show.blade.php` - Detalhes de um formulário

### Rotas
- `/` - Página inicial
- `/form` (POST) - Envio de formulário
- `/login` - Login
- `/dashboard` - Painel de controle (protegido)
- `/dashboard/forms/{id}` - Detalhes do formulário

## Instalação

1. Instale as dependências:
```bash
composer install
```

2. Copie o arquivo `.env.example` para `.env`:
```bash
cp .env.example .env
```

3. Gere a chave da aplicação:
```bash
php artisan key:generate
```

4. Configure o banco de dados no arquivo `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=growfin
DB_USERNAME=root
DB_PASSWORD=
```

5. Execute as migrations:
```bash
php artisan migrate
```

6. Crie um usuário para acessar o painel:
```bash
php artisan tinker
```
No tinker, execute:
```php
User::create([
    'name' => 'Admin',
    'email' => 'admin@growfin.com',
    'password' => bcrypt('senha123')
]);
```

7. Mova os assets para a pasta public:
```bash
# Os assets já estão na pasta assets/, mas você pode criar um link simbólico:
php artisan storage:link
```

8. Inicie o servidor:
```bash
php artisan serve
```

## Funcionalidades

### Formulário de Contato
- O formulário na página inicial envia dados via AJAX
- Os dados são salvos no banco de dados
- Validação de campos obrigatórios

### Painel de Controle
- Login com email e senha
- Dashboard com estatísticas:
  - Total de formulários
  - Formulários do dia
- Tabela com todos os formulários enviados
- Visualização de detalhes de cada formulário

## Próximos Passos

1. **Migrar o conteúdo completo do index.html**:
   - Copie o conteúdo do `index.html` para `resources/views/home/sections/`
   - Divida em seções (hero, about, services, etc.)
   - Adapte os caminhos de assets para usar `asset()`

2. **Mover assets para public**:
   - Copie a pasta `assets/` para `public/assets/`
   - Ou configure o Laravel para servir da pasta atual

3. **Configurar autenticação completa**:
   - O Laravel já tem sistema de autenticação
   - Use `php artisan make:auth` se necessário

4. **Adicionar mais funcionalidades**:
   - Exportar formulários para Excel/PDF
   - Filtros e busca no dashboard
   - Notificações por email

## Notas

- O formulário usa AJAX para envio sem recarregar a página
- O dashboard é protegido por middleware de autenticação
- Os assets (CSS, JS, imagens) precisam estar acessíveis via `public/assets/`

