FROM mhart/alpine-node:6.10.3

MAINTAINER galapon <galapon@gmail.com>

RUN npm install -g gulp-cli

WORKDIR /src

ADD ./web/package.json /tmp/
RUN cd /tmp && npm install
RUN mkdir -p /src && cp -a /tmp/node_modules /src
ENV PATH /src/node_modules/.bin:$PATH

#CMD ["sleep", "infinity"] 
CMD gulp build && gulp
