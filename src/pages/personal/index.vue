<template>
  <div class="user">
    <div class="user-post">
      <div class="user-header"  v-for="item in userInfo" :key="item.id">
        <div class="user-info">
          <img class="user-img" :src="item.u_avatar">
          <span class="user-name">{{item.u_name}}</span>
        </div>
        <el-button class="user-logout" @click="logout">退出当前账号</el-button>
      </div>
      <div v-for="(item, index) in postInfo" :key="index">
        <el-alert
          class="user-title"
          :title="item.p_title"
          type="info"
          @close="del(index)">
            <router-link :to="{name: 'forum-post', params: {id: item.p_publish}}">
              {{item.p_time}}
            </router-link>
        </el-alert>
      </div>
    </div>
    <img class="bg-img" :src="require('assets/img/bg.png')">
  </div>
</template>

<script>
  import {getUserInfo} from 'api/personal';
  import {mapMutations, mapActions} from 'vuex';
  export default {
    name: 'Personal',
    data() {
      return {
        userInfo: [],
        postInfo: []
      };
    },
    methods: {
      ...mapMutations(['logout']),
      ...mapActions(['logout', 'delPost']),
      del(i) {
        let index = this.i;
        /* 获取删除的p_title值 */
        let postTitle = this.postInfo[i].p_title;
        let obj = {};
        obj.index = index;
        obj.postTitle = postTitle;
        /* console.log(inde);
        console.log(postTitle); */
        this.delPost(obj);
      },
      getUser() {
        getUserInfo().then(data => {
          this.userInfo = data.userInfo;
          this.postInfo = data.postInfo;
          /* console.log(this.userInfo);
          console.log(this.postInfo); */
        });
      }
    },
    created() {
      this.getUser();
    }
  };
</script>
<style lang="scss" scoped>
  .user {
    width: 100%;
    height: auto;
    margin-top: 51px;

    &-header {
      width: 100%;
      padding: 10%;
      margin-bottom: 1%;
      background:#fff;
    }

    &-info {
      width: 74px;
      margin: 0 auto;
    }

    &-img {
      width: 74px;
      height: 74px;
      border-radius: 50%;
    }

    &-name {
      line-height: 42px;
      font-size: 20px;
      font-weight: 700;
      color: #000;
      padding-left: 5px;
    }

    &-logout {
      width: 100%;
      margin: 0 auto;
      margin-top: 20px;
    }

    &-title {
      width: 100%;
      height: 50px;
      margin-top: 10px;
      padding: 30px;
      font-weight: 900;
      color: #000;
      background: #fff;
    }
  }

  .bg-img {
    width: 100%;
    height: 100%;
  }
</style>
