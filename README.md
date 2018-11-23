MongoDB workshop
==============

### Prepare development environment:

##### Install Docker:
- ([docs.docker.com/install/](https://docs.docker.com/install/))
- ([docs.docker.com/compose/install/](https://docs.docker.com/compose/install/))

##### Build image:
```bash
docker-compose build
```

##### Run containers (use -d flag for “detached” mode):
```bash
docker-compose up -d
```

##### Install composer:
```bash
docker-compose exec composer composer install
```

### Access MongoDB:
1. PHP application: [localhost:80](localhost:80)
1. Mongo Express: [localhost:8081](localhost:8081)
