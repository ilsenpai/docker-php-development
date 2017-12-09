FROM debian:jessie

RUN apt-get update && apt-get install -y nginx

ADD ./conf/nginx.conf /etc/nginx/
ADD ./conf/application.conf /etc/nginx/sites-available/
ADD ./conf/upstream.conf /etc/nginx/conf.d/upstream.conf

RUN ln -s /etc/nginx/sites-available/application.conf /etc/nginx/sites-enabled/application
RUN rm /etc/nginx/sites-enabled/default

CMD ["nginx"]

#EXPOSE 80
#EXPOSE 443