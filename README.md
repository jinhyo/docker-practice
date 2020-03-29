# docker-practice
### Install
<pre>
cd /home
git clone https://github.com/jinhyo/docker-practice.git
cd docker-practice
</pre>

### Run
<pre>
# log in docker hub
docker login
docker pull sosilion/docker-test
docker run -p 80:80 -v /home/docker-practice/project:/var/www/html --name=php-db sosilion/docker-test
</pre>
