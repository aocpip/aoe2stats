const {isMain} = require('./util')
const contents = require('./aoc_gathering.json')

if (require.main === module || isMain()) {
    console.log(JSON.stringify(contents))
}

module.exports = contents
