<template>
  <div class="post">
    <div class="post-info"  v-for="item in postInfo" :key="item.id">
      <img class="post-img" :src="item.p_avatar" alt="图片加载失败">
      <span class="post-id">{{item.p_name}}</span>
      <span class="post-time">{{item.p_time}}</span>
      <p class="post-title">{{item.p_title}}</p>
      <p class="post-content">{{item.p_content}}</p>
    </div>
    <div class="comment" v-for="(item, index) in commentInfo" :key="index">
      <img class="comment-avatar" :src="item.u_avatar">
      <p class="comment-name">{{item.c_name}}</p>
      <p class="comment-content">{{item.c_comment}}</p>
    </div>
    <el-input
      class="comment-input"
      v-model="comment"
      placeholder="发表评论">
      <el-button
        @click="addComment"
        slot="append"
        type="primary">发送</el-button>
    </el-input>
  </div>
</template>

<script>
  import {mapActions} from 'vuex';
  import {getPostComment} from 'api/post';
  export default {
    name: 'ForumPost',
    components: {},
    props: {},
    data() {
      return {
        postInfo: [],
        commentInfo: []
      };
    },
    watch: {},
    computed: {
      comment: {
        get() {
          return this.$store.state.comment;
        },
        set(value) {
          this.$store.commit('updateComment', value);
        }
      }
    },
    methods: {
      ...mapActions(['addComment']),
      getComment() {
        getPostComment(this.$route.params.id).then(data => {
          /* console.log(data); */
          // 将当前页面版本号参数保存到state
          this.$store.state.publish = this.$route.params.id;
          this.postInfo = data.postInfo;
          this.commentInfo = data.commentInfo;
        });
      }
    },
    created() {
      this.getComment();
    },
    mounted() {}
  };
</script>
<style lang="scss" scoped>
  @import "~assets/scss/mixins";
  .post {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin-top: 51px;
    overflow: hidden;
    position: absolute;
    background-color: #eee;
    z-index: $post-z-index;// 提高层级以达到点击可以进行跳转

    &-info {
      width: 100%;
      height: auto;
      padding: 20px;
      background: #fff;
    }

    &-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    &-id {
      font-size: 20px;
      color:deepskyblue;
    }

    &-time {
      margin-right: 10px;
      font-size: 10px;
      color: #999;
    }

    &-title {
      width: 100%;
      padding-top: 20px;
      font-size: 30px;
      font-weight: 500;
      line-height: 18px;
      color: #333;
    }

    &-content {
      width: 100%;
      padding: 30px 0 30px 0;
      font-size: 20px;
      line-height: 18px;
      color: #333;
    }

    .comment {
      width: 100%;
      height: auto;
      background: #fff;
      margin-top: 5px;
      padding: 10px;

      &-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }

      &-name {
        display: inline;
      }

      &-content {
        margin: 20px 0 10px 10%;
        font-size: 20px;
      }

      &-input {
        position: fixed;
        bottom: 0;
      }
    }
  }
</style>
