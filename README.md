# gamerutopia

> 游邦

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report

# server下的gamerutopia放到xampp下的htdocs，注意路径和数据库配置

# 项目如果需要放到云服务器上请注意以下事项
 1 把router history模式注释掉
 2 把所有接口路径改成线上路径 eg：http://193.112.100.227/gamerutopia/public/index/News/getNews
 3 如果项目打包出现路径错误，请参考https://www.cnblogs.com/wanf/p/7871787.html
 4 如果服务器报500错误，请为项目提供权限https://blog.csdn.net/qq_38410991/article/details/78980994
 5 修改后台database配置

# 项目上云服务器
 1 npm run build
 2 把生成的dist目录下的stactic和index.html放到server/gamerutopia的根目录下
 3 直接把server下的gamerutopia放到云服务器上的默认目录


一路磕磕碰碰过来真的不容易，过几天可能会整理一下写个新手向，项目已经放腾讯云http://193.112.100.227/gamerutopia 感兴趣可以看下，虽然多多少少有bug，但是真的没什么精力再弄了
参考：边泉博客https://github.com/wjzbjzz/bianquan-blog.git
资源：游民星空，bilibili
