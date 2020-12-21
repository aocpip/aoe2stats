const util = require('./util')
const isMain = util.isMain()
const diff = require('./de_civilizations_diff.json')

const base = require('./dlc_civilizations')
const data = util.extendData(base, diff)

if (require.main === module || isMain) {
	console.log(JSON.stringify(data))
}

module.exports = data
