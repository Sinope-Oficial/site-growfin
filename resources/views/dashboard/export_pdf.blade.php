<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulários - GrowFin</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 6px; font-size: 12px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Formulários - GrowFin</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Tamanho Empresa</th>
                <th>Setor</th>
                <th>Status</th>
                <th>Urgência</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->lastname }}</td>
                    <td>{{ $form->email }}</td>
                    <td>{{ $form->phone }}</td>
                    <td>{{ $form->company_size }}</td>
                    <td>{{ $form->sector }}</td>
                    <td>{{ $form->status }}</td>
                    <td>{{ $form->urgency_level }}</td>
                    <td>{{ optional($form->created_at)->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


