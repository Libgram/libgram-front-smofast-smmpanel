
# Универсальный .htaccess файл для команды Libgram

Этот `.htaccess` файл предоставляет базовые и продвинутые настройки для повышения безопасности, оптимизации и управления перенаправлениями на веб-сайтах на серверах Apache.

## Содержимое файла

```apache
# --- Настройка перезаписи ---
RewriteEngine On

# Принудительное использование домена без "www"
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

# Перенаправление на главную при отсутствии файла или директории
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^.*$ / [L,R=301]

# Перенаправление на index.php, если файл или директория отсутствует
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^.*$ index.php [L]

# --- Настройки безопасности ---
# Запрет доступа к определенным файлам
<FilesMatch "\.(htaccess|htpasswd|ini|phps|fla|psd|log|sh)$">
Order Allow,Deny
Deny from all
</FilesMatch>

# Установка заголовков безопасности
<IfModule mod_headers.c>
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
Header set Content-Security-Policy "default-src 'self';"
</IfModule>

# --- Настройки оптимизации ---
# Задание типов заголовков кэширования
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access 1 year"
... [остальные заголовки кэширования]
</IfModule>

# Сжатие Gzip
<IfModule mod_deflate.c>
AddOutputFilterByType DEFLATE text/plain
... [остальные заголовки сжатия]
</IfModule>

# Запрет рендер-блокирования ресурсов для CSS и JS файлов
<FilesMatch "\.(css|js)$">
Header set Cache-Control "public, max-age=604800, immutable"
</FilesMatch>
```

## Описание

- **Настройка перезаписи**: Управление поведением перенаправления и перезаписи на вашем сайте.
- **Настройки безопасности**: Предоставляют дополнительную защиту, запрещая прямой доступ к чувствительным файлам и устанавливают различные заголовки безопасности.
- **Настройки оптимизации**: Включают сжатие Gzip, устанавливают заголовки кэширования и другие оптимизации.

## Использование

1. Скачайте и поместите `.htaccess` файл в корневую директорию вашего веб-сайта.
2. Убедитесь, что ваш сервер Apache настроен на использование файлов `.htaccess` и имеет необходимые модули включены (например, `mod_rewrite`, `mod_deflate`, `mod_expires` и `mod_headers`).
3. Протестируйте свой веб-сайт после добавления файла, чтобы убедиться, что все работает корректно.

## Лицензия

Этот проект опубликован под лицензией MIT. Пожалуйста, ознакомьтесь с файлом `LICENSE` для дополнительной информации.
