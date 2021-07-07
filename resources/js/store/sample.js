const state = {
    select: 'one',
    member1: '',
    member2: '',
    member3: '',
    member4: '',
    member5: '',
    member6: '',
    member7: '',
    member8: '',
    member9: '',
    member10: '',
    member11: '',
}

const getters = {
    getSelect: function(state) {
        return state.select
    },
    getMember1: function(state) {
        return state.member1
    },
    getMember2: function(state) {
        return state.member2
    },
    getMember3: function(state) {
        return state.member3
    },
    getMember4: function(state) {
        return state.member4
    },
    getMember5: function(state) {
        return state.member5
    },
    getMember6: function(state) {
        return state.member6
    },
    getMember7: function(state) {
        return state.member7
    },
    getMember8: function(state) {
        return state.member8
    },
    getMember9: function(state) {
        return state.member9
    },
    getMember10: function(state) {
        return state.member10
    },
    getMember11: function(state) {
        return state.member11
    }
}

const mutations = {
    changeFormation(state, val) {
        state.select = val;
    },
    changeMember1(state, val) {
        state.member1 = val;
    },
    changeMember2(state, val) {
        state.member2 = val;
    },
    changeMember3(state, val) {
        state.member3 = val;
    },
    changeMember4(state, val) {
        state.member4 = val;
    },
    changeMember5(state, val) {
        state.member5 = val;
    },
    changeMember6(state, val) {
        state.member6 = val;
    },
    changeMember7(state, val) {
        state.member7 = val;
    },
    changeMember8(state, val) {
        state.member8 = val;
    },
    changeMember9(state, val) {
        state.member9 = val;
    },
    changeMember10(state, val) {
        state.member10 = val;
    },
    changeMember11(state, val) {
        state.member11 = val;
    },
}

const actions = {

}

export default {
    state,
    getters,
    mutations,
    actions
}
