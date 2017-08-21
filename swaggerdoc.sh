

# 生成 swagger 文档
php vendor/zircote/swagger-php/bin/swagger application/modules/ application/models -o public/swagger-doc/swagger-api.json
php vendor/zircote/swagger-php/bin/swagger application/controllers/ application/models -o public/swagger-doc/swagger.json