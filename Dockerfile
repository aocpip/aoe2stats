FROM ubuntu

MAINTAINER pip <aocpip@gmail.com>

# install our dependencies npm, gulp
RUN apt-get update
RUN apt-get -y install curl git build-essential wget unzip
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash -
RUN apt-get update
RUN apt-get -y install nodejs php

RUN npm install -g gulp-cli

WORKDIR /src

ADD ./web/package.json /tmp/
RUN cd /tmp && npm install
RUN mkdir -p /src && cp -a /tmp/node_modules /src
ENV PATH /src/node_modules/.bin:$PATH

#CMD ["sleep", "infinity"] 
CMD gulp build && gulp