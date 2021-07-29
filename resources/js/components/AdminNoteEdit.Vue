<script>
export default {
    mounted: function() {
        this.$nextTick(function () {
            this.$store.commit('changeFormation', this.note.formation);
            this.$store.commit('changeMember1', this.member.member1);
            this.$store.commit('changeMember2', this.member.member2);
            this.$store.commit('changeMember3', this.member.member3);
            this.$store.commit('changeMember4', this.member.member4);
            this.$store.commit('changeMember5', this.member.member5);
            this.$store.commit('changeMember6', this.member.member6);
            this.$store.commit('changeMember7', this.member.member7);
            this.$store.commit('changeMember8', this.member.member8);
            this.$store.commit('changeMember9', this.member.member9);
            this.$store.commit('changeMember10', this.member.member10);
            this.$store.commit('changeMember11', this.member.member11);
        })
    },
    methods: {
        onChange(val) {
            this.$store.commit('changeFormation', val.target.value);
        },
        inputMember1(val) {
            this.$store.commit('changeMember1', val.target.value);
        },
        inputMember2(val) {
            this.$store.commit('changeMember2', val.target.value);
        },
        inputMember3(val) {
            this.$store.commit('changeMember3', val.target.value);
        },
        inputMember4(val) {
            this.$store.commit('changeMember4', val.target.value);
        },
        inputMember5(val) {
            this.$store.commit('changeMember5', val.target.value);
        },
        inputMember6(val) {
            this.$store.commit('changeMember6', val.target.value);
        },
        inputMember7(val) {
            this.$store.commit('changeMember7', val.target.value);
        },
        inputMember8(val) {
            this.$store.commit('changeMember8', val.target.value);
        },
        inputMember9(val) {
            this.$store.commit('changeMember9', val.target.value);
        },
        inputMember10(val) {
            this.$store.commit('changeMember10', val.target.value);
        },
        inputMember11(val) {
            this.$store.commit('changeMember11', val.target.value);
        },
        ChangeSubMemberStatus() {
            console.log('来てる');
            this.$store.commit('changeSubMemberStatus');
        }
    },
    computed: {
        select: function() {
            return this.$store.getters.getSelect
        },
        member1: function() {
            return this.$store.getters.getMember1
        },
        member2: function() {
            return this.$store.getters.getMember2
        },
        member3: function() {
            return this.$store.getters.getMember3
        },
        member4: function() {
            return this.$store.getters.getMember4
        },
        member5: function() {
            return this.$store.getters.getMember5
        },
        member6: function() {
            return this.$store.getters.getMember7
        },
        member7: function() {
            return this.$store.getters.getMember7
        },
        member8: function() {
            return this.$store.getters.getMember8
        },
        member9: function() {
            return this.$store.getters.getMember9
        },
        member10: function() {
            return this.$store.getters.getMember10
        },
        member11: function() {
            return this.$store.getters.getMember11
        },
        subMemberStatus: function() {
            return this.$store.getters.getSubMemberStatus
        },
    },
    props:  {
        csrf: {
            type: String,
            required: true,
        },
        errors: {
            type: Array,
            required: true,
        },
        notes: {
            type: Object,
        },
        members: {
            type: Object,
        }
    },
    data: function() {
        return {
            error:{
                date: this.errors.date,
                place:this.errors.place,
                opponent:this.errors.opponent,
                match_result_home:this.errors.match_result_home,
                match_result_away:this.errors.match_result_away,
                url:this.errors.url,
                impressions:this.errors.impressions,
                comment:this.errors.comment,
                formation:this.errors.formation,
            },
            note:{
                date:this.notes.date,
                place:this.notes.place,
                opponent:this.notes.opponent,
                match_result_home:this.notes.match_result_home,
                match_result_away:this.notes.match_result_away,
                url:this.notes.url,
                impressions:this.notes.impressions,
                comment:this.notes.comment,
                formation:this.notes.formation,
            },
            member: {
                member1: this.members.member1,
                member2: this.members.member2,
                member3: this.members.member3,
                member4: this.members.member4,
                member5: this.members.member5,
                member6: this.members.member6,
                member7: this.members.member7,
                member8: this.members.member8,
                member9: this.members.member9,
                member10: this.members.member10,
                member11: this.members.member11,
                member12: this.members.member12,
                member13: this.members.member13,
                member14: this.members.member14,
                member15: this.members.member15,
                member16: this.members.member16,
                member17: this.members.member17,
                member18: this.members.member18,
            },
        }
    }
}
</script>

<template>
    <div>
        <input type="hidden" name="_token" :value="csrf">
        <!-- 日付 -->
        <div class="date">
            <div class="form-group py-2 px-3">
                <label class="text-lg">日付<span class="text-white text-sm px-3 py-1 bg-red-600 ml-3 rounded-sm">必須</span></label>
                <strong class="error text-red-600" v-for="value in error.date">{{ value }}</strong>
                <input disabled type="date" name="date" class="form-control" :value="note.date">
            </div>
        </div>

        <!-- 場所 -->
        <div class="place">
            <div class="form-group py-2 px-3">
                <label class="text-lg">場所<span class="text-white text-sm px-3 py-1 bg-red-600 ml-3 rounded-sm">必須</span></label>
                <strong class="error text-red-600" v-for="value in error.place">{{ value }}</strong>
                <input disabled type="text" name="place" class="form-control" :value="note.place">
            </div>
        </div>

        <!-- 対戦相手 -->
        <div class="opponent">
            <div class="form-group py-2 px-3">
                <label class="text-lg">対戦相手</label>
                <strong class="error text-red-600" v-for="value in error.opponent">{{ value }}</strong>
                <input disabled type="text" name="opponent" class="form-control" :value="note.opponent">
            </div>
        </div>

        <!-- 試合結果 -->
        <div class="result">
            <div class="form-group py-2 px-3">
                <label class="text-lg">試合結果</label>
                <strong class="error text-red-600" v-for="value in error.match_result_home">{{ value }}</strong>
                <strong class="error text-red-600" v-for="value in error.match_result_away">{{ value }}</strong>
                <div class="flex text-center">
                    <input disabled type="number" min=0 name="match_result_home" class="form-control w-1/5" :value="note.match_result_home">
                    <span class="w-1/5 text-xl leading-loose">VS</span>
                    <input disabled type="number" min=0 name="match_result_away" class="form-control w-1/5" :value="note.match_result_away">
                </div>
            </div>
        </div>

        <!-- 試合動画URL -->
        <div class="url">
            <div class="form-group py-2 px-3">
                <label class="text-lg">試合動画URL</label>
                <strong class="error text-red-600" v-for="value in error.url">{{ value }}</strong>
                <input disabled type="url" name="url" class="form-control" :value="note.url">
            </div>
        </div>

        <!-- 試合について -->
        <div class="impressions">
            <div class="form-group py-2 px-3">
                <label class="text-lg">試合について</label>
                <strong class="error text-red-600" v-for="value in error.impressions">{{ value }}</strong>
                <textarea disabled name="impressions" cols="20" rows="10" class="form-control" :value="note.impressions"></textarea>
            </div>
        </div>

        <!-- フォーメーション -->
        <div class="formation">
            <div class="form-group py-2 px-3">
                <label class="text-lg">フォーメーション</label>
                <select disabled @change="onChange" name="formation" id="" class="form-control">
                    <option v-bind:selected="note.formation == 'one'" value="one">4-4-2</option>
                    <option v-bind:selected="note.formation == 'two'" value="two">4-2-3-1</option>
                    <option v-bind:selected="note.formation == 'three'" value="three">4-1-4-1</option>
                    <option v-bind:selected="note.formation == 'four'" value="four">4-1-2-3</option>
                    <option v-bind:selected="note.formation == 'five'" value="five">4-2-1-3</option>
                </select>
            </div>
        </div>

        <!-- 対戦相手 -->
        <div class="member">
            <div class="form-group py-2 px-3">
                <label class="text-lg">出場選手</label>
                <table class="w-100 table table-bordered">
                    <tr>
                        <th class="w-1/5">ポジション</th>
                        <th class="w-4/5">名前</th>
                    </tr>
                    <tr>
                        <td>GK</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member1" class="form-control" @input="inputMember1" :value="member.member1"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member2" class="form-control" @input="inputMember2" :value="member.member2"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member3" class="form-control" @input="inputMember3" :value="member.member3"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member4" class="form-control" @input="inputMember4" :value="member.member4"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member5" class="form-control" @input="inputMember5" :value="member.member5"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member6" class="form-control" @input="inputMember6" :value="member.member6"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member7" class="form-control" @input="inputMember7" :value="member.member7"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member8" class="form-control" @input="inputMember8" :value="member.member8"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member9" class="form-control" @input="inputMember9" :value="member.member9"></td>
                    </tr>
                    <tr>
                        <td>FW</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member10" class="form-control" @input="inputMember10" :value="member.member10"></td>
                    </tr>
                    <tr>
                        <td>FW</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member11" class="form-control" @input="inputMember11" :value="member.member11"></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- サブメンバー -->
        <div class="py-2 px-3">
            <div class="border bg-light py-2 text-base text-center cursor-pointer position-relative sub-member" @click="ChangeSubMemberStatus">
                サブメンバーも入力する
                <img v-if="subMemberStatus == true" :src="'/images/plusmark.svg'" alt="" style="width: 15px;" class="position-absolute right-3 top-1/3">
                <img v-else :src="'/images/minusmark.svg'" alt="" style="width: 15px;" class="position-absolute right-3 top-1/3">
            </div>
            <div class="sub-list" v-bind:class="{ subMemberStatus: subMemberStatus }">
                <table class="w-100 table table-bordered">
                    <tr>
                        <td>GK</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member12" class="form-control" :value="member.member12"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member13" class="form-control" :value="member.member13"></td>
                    </tr>
                    <tr>
                        <td>DF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member14" class="form-control" :value="member.member14"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member15" class="form-control" :value="member.member15"></td>
                    </tr>
                    <tr>
                        <td>MF</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member16" class="form-control" :value="member.member16"></td>
                    </tr>
                    <tr>
                        <td>FW</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member17" class="form-control" :value="member.member17"></td>
                    </tr>
                    <tr>
                        <td>FW</td>
                        <td class="p-0 align-middle"><input disabled type="text" name="member18" class="form-control" :value="member.member18"></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- 試合について -->
        <div class="comment">
            <div class="form-group py-2 px-3">
                <label class="text-lg">コーチからの一言</label>
                <strong class="error text-red-600" v-for="value in error.comment">{{ value }}</strong>
                <textarea name="comment" cols="20" rows="10" class="form-control" :value="note.comment"></textarea>
            </div>
        </div>

        <!-- 送信ボタン -->
        <div class="submit mt-10 mb-28 flex items-center justify-between">
            <div class="form-group py-2 px-3 w-3/6">
                <input type="submit" name="save" value="更新する" class="form-control btn btn-primary">
            </div>
            <div class="form-group py-2 px-3 w-3/6">
                <input type="submit" name="pdf" value="PDF出力" class="form-control btn btn-secondary">
            </div>
        </div>
    </div>
</template>
