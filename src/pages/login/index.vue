<template>
  <div class="login">
    <img class="bg_img" src="static/logo.png">
    <el-form>
        <el-form-item>
          <el-input
            ref="input_email"
            @blur="check_email"
            v-model="userEmail"
            autocomplete="on"
            placeholder="请输入邮箱"
          >
          </el-input>
        </el-form-item>
        <el-form-item>
          <el-input
            ref="input_pwd"
            @blur="check_pwd"
            v-model="userPwd"
            autocomplete="off"
            placeholder="请输入密码"
            type="password"
            show-password
          >
          </el-input>
        </el-form-item>
        <el-button @click="login" class="btn" type="primary" plain>登录</el-button>
        <router-link to='/register'>
          <a class="link_reg">没有账号？立即注册</a>
        </router-link>
    </el-form>
  </div>
</template>

<script>
  import {mapActions} from 'vuex';
  export default {
    name: 'Login',
    components: {},
    props: {},
    data() {
      return {
        check_result: {
          email: false,
          pwd: false
        }
      };
    },
    watch: {},
    computed: {
      userEmail: {
        get() {
          return this.$store.state.userEmail;
        },
        set(value) {
          this.$store.commit('updateuserEmail', value);
        }
      },
      userPwd: {
        get() {
          return this.$store.state.userPwd;
        },
        set(value) {
          this.$store.commit('updateuserPwd', value);
        }
      }
    },
    methods: {
      ...mapActions(['login']),
      check_email() {
        this.check_result.email = false;
        let email = this.$refs.input_email.value;
        if (email) {
          let reg = new RegExp('^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$'); // 正则表达式
          if (!reg.test(email)) {
            this.$message.error('邮箱格式不正确');
          } else {
            this.check_result.email = true;
            this.$message.success('邮箱格式输入正确');
          }
        } else {
          this.$message.error('邮箱不能为空');
        }
      },
      check_pwd() {
        this.check_result.pwd = false;
        let pwd = this.$refs.input_pwd.value;
        if (pwd) {
          if (pwd.length < 4 || name.length > 20) {
            this.$message.error('密码不符合要求');
          } else {
            this.check_result.pwd = true;
            this.$message.success('密码格式输入正确');
          }
        } else {
          this.$message.error('密码不能为空');
        }
      }
    },
    created() {},
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  .login {
    padding: 0 30px;
  }

  .btn {
    width: 100%;
    background-color: purple;
    margin-bottom: 10px;
  }

  .bg_img {
     width: 100%;
     height: 100%;
     padding: 80px 80px 30px 80px;
  }

  .link_reg {
    color:royalblue;
  }
</style>
