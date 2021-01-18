$(document).ready(function () {
    $('table.stickyHeader').stickyTableHeaders();
});

const ROW_TYPE = 0
const ROW_NAME = 1
const ROW_AGE = 2

const ROW_SOURCE = 1
const NOT_FOUND = {
    name: 'Not found'
}

const COLUMNS_ORDER = {
    'type': "Type",
    'ct': "Civilization type",
    'ver': "Introduced in ",
    'age': "Age",
    'cost': "Cost",
    'hp': "HP",
    'bt': "Build time",
    'time': "Research time",
    'speed': "Gathering speed",
    'fr': "Firing rate",
    'ad': "Attack delay",
    'mr': "Movement rate",
    'los': "Line of sight",
    'ra': "Range",
    'at': "Attack",
    'ar': "Armor (melee/pierce)",
    'extra': "Extra",
    'civb': "Civilization bonuses",
    'uu': "Unique unit",
    'ut': "Unique technology",
    'tb': "Team bonus",
    'bs': "Civilization bonuses",
    'tt': "Techtree",
    'note': "Note",
    'for': "Technology for or Upgrades",
    'GA': "Garrison or extra info",
    'avail': "Available",
    'noavail': "Not available"
}

const COLUMNS_FORMAT = {
    'type': 'format_default',
    'ct': 'format_default',
    'ver': 'format_version',
    'age': 'format_age',
    'cost': 'format_default',
    'hp': 'format_default',
    'bt': 'format_default',
    'speed': 'format_default',
    'time': 'format_default',
    'fr': 'format_default',
    'ad': 'format_default',
    'mr': 'format_default',
    'los': 'format_default',
    'ra': 'format_default',
    'at': 'format_default',
    'ar': 'format_default',
    'extra': 'format_table',
    'uu': 'format_default',
    'ut': 'format_default',
    'tb': 'format_default',
    'bs': 'format_default',
    'civb': 'format_table',
    'note': 'format_default',
    'for': 'format_default',
    'GA': 'format_default',
    'avail': 'format_available',
    'noavail': 'format_not_available',
    'tt': 'format_techtree'
}

Vue.component('default-item', {
    template: '{{value}}',
    props: ['value']
})

Vue.component('table-item-row', {
    props: ['head', 'value'],
    template: '<tr><th>{{head}}</th><td>{{value}}</td></tr>'
})

Vue.component('table-item', {
    props: ['data'],
    template: `
     <table class="detail-table table table-striped table-hover table-bordered" width="100%">
        <table-item-row
            v-for="item in Object.entries(data)"
            v-bind:key={item[0]}
            v-bind:head={item[0]}
            v-bind:value={item[1]} 
        />
     </table>
    `,
})

Vue.component('availability-item', {
    template: 'TBD availability'
})

Vue.component('version-item', {
    template: 'TBD version'
})

Vue.component('age-item', {
    template: 'TBD age'
})

Vue.component('techtree-item', {
    template: 'TBD techtree'
})

var table = new Vue({
    name: "compare-table",
    data: function () {
        return {
            aocVersion: "aoc"
        };
    },
    created: function () {
        var urlParams = new URLSearchParams(window.location.search)
        if (urlParams.has('v')) {
            this.aocVersion = urlParams.get('v')
        }
        // Simple GET request using fetch
        fetch("/stats/aoc_units.json")
            .then(response => response.json())
            .then(data => (this.totalVuePackages = data.total));
    }
})

