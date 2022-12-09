# How to use wordress #

## Requirement ##

1. Docker compose
2. Turn off services use ports 3306, 8000,8080
3. How to install
   Start docker 
   ```
    docker-compose up -d --build
   ```
   Check
   ```
    docker-compose ps
   ```
    Result

    ```

                Name                   Command           State           Ports         
    --------------------------------------------------------------------------------
    wordpress_db_1           docker-entrypoint.sh     Up      3306/tcp, 33060/tcp   
                            mysqld                                                 
    wordpress_phpmyadmin_1   /docker-entrypoint.sh    Up      0.0.0.0:8080-         
                            apac ...                         >80/tcp,:::8080-      
                                                            >80/tcp               
    wordpress_wordpress_1    docker-entrypoint.sh     Up      0.0.0.0:8000-         
                            apach ...                        >80/tcp,:::8000-      
                                                            >80/tcp      
    ```

4. Start setup WORDPRESS
   open browser 
   ```
    localhost:8000
   ```
5. Start edit database with phpmyadmin
    open browser
    ```
    localhost:8080
    ```
