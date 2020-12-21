const util = require('./util')
const isMain = util.isMain()
const diff = require('./dlc_civilizations_diff.json')

const base = require('./aoc_civilizations')
const data = util.extendData(base, diff)

if (require.main === module || isMain) {
	console.log(JSON.stringify(data))
}

module.exports = data

