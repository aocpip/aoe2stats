const util = require('./util')
const isMain = util.isMain()
const diff = require('./dlc_gathering_diff.json')

const base = require('./aoc_gathering')
const data = util.extendData(base, diff, 'source')

if (require.main === module || isMain) {
	console.log(JSON.stringify(data))
}

module.exports = data
