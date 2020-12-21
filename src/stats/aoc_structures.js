const util = require('./util')
const contents = require('./aoc_structures.json')

util.extendWithAvailability(contents, './aoc_matrix.csv')

if (require.main === module || util.isMain()) {
  console.log(JSON.stringify(contents))
}

module.exports = contents
