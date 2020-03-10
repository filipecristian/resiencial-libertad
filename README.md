## Residencial Libertad
Esta aplicação tem o objetivo de fornecer todo back-end para o sistema mobile do condominio residencial liberdat.

---
### Stack
- Laravel (PHP 7.4)
- MongoDB (Base de Dados)
- Nginx (Sevidor WEB)


### Pré-requisitos
- Docker (docker-compose)

### Requisitos opicionais
- IDE (PHPStorm) ou VScode

---

### Subindo a aplicação na máquina local.

#### 1) Clonar o repositório do gihub.
```
git clone github@residencial.git app
```

#### 2) Entrar na pasta do projeto
```
cd app
```

#### 3) Copiar o arquivo .env.example
```
cp .env.example .env
```

#### 4) Subir a aplicação com docker-compose
```
docker-compose up -d
```

----

### Buscando por Erros
```
docker exec -it app_php composer phpcs
```

### Corrigindo Erros
```
docker exec -it app_php composer phpcbf
```