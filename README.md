# docker-practice
## install
<pre
cd /home
git clone https://github.com/jinhyo/docker-practice.git
cd docker-practice
/pre>

### start
<pre
docker login
docker pull sosilion/docker-test
docker run -p 80:80 -v /home/docker-practice/project:/var/www/html --name=php-db sosilion/docker-test
/pre>
