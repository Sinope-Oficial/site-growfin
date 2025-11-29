# Guia de Instalação - GrowFin Laravel

## Pré-requisitos

- PHP 8.1 ou superior
- Composer
- MySQL/MariaDB
- Node.js e NPM (opcional, para assets)

## Passo a Passo

### 1. Instalar Dependências

```bash
composer install
```

### 2. Configurar Ambiente

Copie o arquivo `.env.example` para `.env` (se não existir):

```bash
cp .env.example .env
```

Ou crie manualmente o arquivo `.env` com as seguintes configurações:

```env
APP_NAME=GrowFin
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=growfin
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Gerar Chave da Aplicação

```bash
php artisan key:generate
```

### 4. Criar Banco de Dados

Crie o banco de dados MySQL:

```sql
CREATE DATABASE growfin CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. Executar Migrations

```bash
php artisan migrate
```

### 6. Criar Usuário Admin

Execute o seeder:

```bash
php artisan db:seed
```

Ou crie manualmente via tinker:

```bash
php artisan tinker
```

No tinker:
```php
User::create([
    'name' => 'Administrador',
    'email' => 'admin@growfin.com',
    'password' => bcrypt('admin123')
]);
```

**Credenciais padrão:**
- Email: `admin@growfin.com`
- Senha: `admin123`

⚠️ **IMPORTANTE:** Altere a senha após o primeiro login!

### 7. Configurar Assets

Os assets (CSS, JS, imagens) já estão na pasta `assets/`. Você precisa:

**Opção 1:** Criar link simbólico (recomendado)
```bash
# No Linux/Mac
ln -s ../assets public/assets

# No Windows (PowerShell como Admin)
New-Item -ItemType SymbolicLink -Path "public\assets" -Target "..\assets"
```

**Opção 2:** Copiar assets para public
```bash
cp -r assets public/assets
```

### 8. Iniciar Servidor

```bash
php artisan serve
```

Acesse: `http://localhost:8000`

## Estrutura de Pastas

```
site-growfin/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       │   └── LoginController.php
│   │       ├── DashboardController.php
│   │       ├── FormController.php
│   │       └── HomeController.php
│   └── Models/
│       └── Form.php
├── assets/          # Assets originais (CSS, JS, imagens)
├── database/
│   ├── migrations/
│   └── seeders/
├── public/          # Pasta pública (servir assets aqui)
├── resources/
│   └── views/
│       ├── auth/
│       ├── dashboard/
│       ├── home/
│       └── layouts/
└── routes/
    └── web.php
```

## Funcionalidades Implementadas

✅ Formulário de contato com envio via AJAX  
✅ Sistema de autenticação  
✅ Dashboard com lista de formulários  
✅ Visualização de detalhes de formulários  
✅ Estatísticas no dashboard  

## Próximos Passos

1. **Migrar conteúdo completo do index.html**
   - O arquivo `index.html` original está preservado
   - Copie o conteúdo para as views em `resources/views/home/sections/`
   - Adapte os caminhos usando `{{ asset() }}`

2. **Personalizar Dashboard**
   - Adicionar filtros e busca
   - Exportar para Excel/PDF
   - Gráficos e relatórios

3. **Melhorias de Segurança**
   - Rate limiting no formulário
   - Validação mais robusta
   - Proteção CSRF (já implementado)

## Troubleshooting

### Erro: "Class 'App\Models\User' not found"
Execute: `composer dump-autoload`

### Erro: "No application encryption key"
Execute: `php artisan key:generate`

### Assets não carregam
Verifique se os assets estão em `public/assets/` ou se o link simbólico está correto.

### Erro de permissões
No Linux/Mac:
```bash
chmod -R 775 storage bootstrap/cache
```

## Suporte

Para dúvidas ou problemas, consulte a documentação do Laravel: https://laravel.com/docs

