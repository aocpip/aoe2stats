const util = require('./util')

const data = require('./aoc_technologies.json')
util.extendWithAvailability(data, './aoc_matrix.csv')

if (require.main === module || util.isMain()) {
  console.log(JSON.stringify(data))
}

module.exports = data
