
This will help to create php application with nginx configuration using docker

This docker file will create php 8.2 version using nginx

before run the Dockerfile check project name and path inside the Dockerfile         

# create project path

mkdir development

cd development

# extra git files
PHP 8.2
NGINX nginx/1.18.0 (Ubuntu)
OS Ubuntu OS V20

# there are three files
    1 Dockerfile
        # Docker image creation for PHP with NGINX server
    2 default
        # Nginx configuraion inside the docker container
    3 app
        # application file inside the app folder

# run docker command for image creation
    docker build -t php8ver_img  . 
        
        [php8ver_img] is image name we can use it any name

# Create Container 
    docker run --name php8ver -d -p 8084:80 -v [************]:/var/www/html php8ver_img

        [php8ver] container name
        
        [-p 8084:80] -- -p porting local to container port -- 8084 browser URL access the outide container -- 80 is nginx running default port inside the container
        -- 8084 port configured outside container -- 80 port default nginx running in container so we access the 80 using 8084
        
        [-v ******]  -- is a local system project folder path sync to container /var/www/html so whatever file modified in the path automatically it will sync with container path
        
        [php8ver_img] -- docker image name

# login to container 
    docker exec -it php8ver /bin/bash
    # [php8ver] --  is container name or we can use it docker container id

# if server not working
    # check the nginx status and php fpm status
        service php8.2-fpm status
        service nginx status
# nginx configured below path
    /etc/nginx/sites-available/default
        # php root configured

# find nginx server log
    /var/log/nginx