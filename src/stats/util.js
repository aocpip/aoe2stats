const fs = require('fs');
const { cloneDeep, merge } = require('lodash');

function csvToObj(filename = '', delimiter = ',') {
    if (!fs.existsSync(filename) || !fs.statSync(filename))
        return false;

    const data = {};
    const rows = fs.readFileSync(filename, 'utf-8')
        .split('\n')
        .filter(Boolean)
        .map(row => row.split(delimiter).map(val => val.trim()))
    const header = rows.shift()
    header.shift() // remove the first one 
    for (const row of rows) {
        const title = row.shift()
        data[title] = header.reduce((acc, val, index) => {
            acc[val] = row[index];
            return acc
        }, {})
    }
    return data;
}

function getAvailability(data) {

    const availability = {};
    Object.entries(data).forEach(([key, byCiv]) => {
        const avail = []
        const noavail = []
        Object.entries(byCiv).forEach(([civ, isAvailable]) => {
            if (isAvailable > 0) {
                avail.push(civ)
            } else {
                noavail.push(civ)
            }
        });
        availability[key] = { avail, noavail }
    });
    return availability;
}

function csvToAvailability(filename = '', delimiter = ',') {
    return getAvailability(csvToObj(filename, delimiter));
}

function extendWithAvailability(contents, filename, key = 'name') {
    const availability = util.csvToAvailability(filename)
    contents.data.map(entry => {
        if (availability.hasOwnProperty(entry[key])) {
            Object.assign(entry, availability[entry[key]])
            entry.t = entry.t + ' ' + entry.avail.join(' ')
        }
    })
    return contents
}

function extendData(data, diff, key = 'name', secondary = '') {
    const extendedData = cloneDeep(data)
    const { changes, additional } = diff
    extendedData.data.forEach(entry => {
        if (changes.hasOwnProperty(entry[key])) {
            merge(entry, changes[entry[key]])
        }
        if (secondary) {
            const secondaryKey = `${entry[key]}${entry[secondary]}`
            if (changes.hasOwnProperty(secondaryKey)) {
                merge(entry, changes[secondaryKey])
            }
        }
    })
    extendedData.data.push(...additional)
    return extendedData
}

let _main = true
function isMain() {
    if (process.env.STATS_PRINT && _main) {
        _main = false
        return true
    }
    return false
}

module.exports = {
    csvToAvailability,
    extendWithAvailability,
    extendData,
    isMain
}
