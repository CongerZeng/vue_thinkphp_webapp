<template>
  <div class="issue">
    <el-select ref="input_section" @blur="check_section" v-model="section" clearable placeholder="游戏版块">
      <el-option
        v-for="item in options"
        :key="item.value"
        :label="item.label"
        :value="item.label"
        >
      </el-option>
    </el-select>
    <div style="margin: 20px 0;"></div>
    <el-input
      ref="input_title"
      @blur="check_title"
      type="textarea"
      autosize
      placeholder="~加个标题哟"
      v-model="title">
    </el-input>
    <div style="margin: 20px 0;"></div>
    <el-input
      ref="input_content"
      @blur="check_content"
      type="textarea"
      :autosize="{ minRows: 2, maxRows: 4}"
      placeholder="~一起和大家讨论吧"
      v-model="content">
    </el-input>
    <el-button class="btn" type="primary" @click="addPost" plain>发布</el-button>
    <img class="bg-img" :src="require('assets/img/bg.png')">
  </div>
</template>

<script>
  import {mapActions} from 'vuex';
  export default {
    name: 'Issue',
    components: {},
    props: {},
    data() {
      return {
        check_result: {
          section: false,
          title: false,
          content: false
        },
        options: [{
          value: '1',
          label: '《极限竞速地平线4》'
        }, {
          value: '2',
          label: '《荣耀战魂》'
        }, {
          value: '3',
          label: '《GTA5》'
        }, {
          value: '4',
          label: '《APEX》'
        }, {
          value: '5',
          label: '《荒野大镖客2救赎》'
        }, {
          value: '6',
          label: '《全境封锁2》'
        }, {
          value: '7',
          label: '《刺客信条：起源》'
        }]
      };
    },
    watch: {},
    computed: {
      section: {
        get() {
          return this.$store.state.section;
        },
        set(value) {
          this.$store.commit('updateSection', value);
        }
      },
      title: {
        get() {
          return this.$store.state.title;
        },
        set(value) {
          this.$store.commit('updateTitle', value);
        }
      },
      content: {
        get() {
          return this.$store.state.content;
        },
        set(value) {
          this.$store.commit('updateContent', value);
        }
      }
    },
    methods: {
      ...mapActions(['addPost']),
      check_section() {
        this.check_result.section = false;
        let section = this.$refs.input_section.value;
        if (!section) {
          this.$message.error('请选择游戏版块~');
        } else {
          this.check_result.section = true;
        }
      },
      check_title() {
        this.check_result.title = false;
        let title = this.$refs.input_title.value;
        if (!title) {
          this.$message.error('请填写标题哦~');
        } else {
          this.check_result.title = true;
        }
      },
      check_content() {
        this.check_result.content = false;
        let content = this.$refs.input_content.value;
        if (!content) {
          this.$message.error('写点什么吧~');
        } else {
          this.check_result.content = true;
        }
      }
    },
    created() {},
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  .issue {
    margin-top: 51px;
    background-color: #fff;
  }

  .bg-img {
    width: 100%;
    height: 100%;
  }

  .btn {
    width: 30%;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    background: #fff;
  }
</style>
