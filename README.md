# aoe2stats.net
Age of Empires II statistics [website](http://aoe2stats.net). 

Includes unit, building, civilization and technology information and statistics.


# Development

## Setup

- clone the git repository  
`git clone https://github.com/aocpip/aoe2stats.git`
- build and start the docker containers  
```docker-compose build
docker-compose up -d nginx```
- visit `http://localhost`

## Testing

The nginx and fpm containers directly access the files in the `./web` directory.

The civilization and technology data is not taken directly from the files in `./web/stats`, but from compiled json files in `./web/stats/build`.

To compile the json files, start the devloper shell:

- Windows: run `dev-shell.cmd`
- Linux: run `dev-shell.sh`

Once connected, run `gulp build && gulp` to build the compiled json files.

Exit the developer shell using `exit` or `Ctrl+D`.