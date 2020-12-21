const util = require('./util')
const isMain = util.isMain()
const diff = require('./dlc_units_diff.json')

const base = require('./aoc_units')
const data = util.extendData(base, diff, 'name', 'age')
util.extendWithAvailability(data, './dlc_matrix.csv')

if (require.main === module || isMain) {
	console.log(JSON.stringify(data))
}

module.exports = data
