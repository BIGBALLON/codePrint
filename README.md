# codePrint

这是一个简单的代码打印系统，用于acm-icpc比赛的代码打印。


## 仓库结构说明：  

```
├─code                   % 用于保存参赛队员提交的代码
├─src                    % 存放css及img
├─codeprinter.html       % 主页
├─namelist               % 存放参赛队员的用户名和密码
├─print_ctl.php          % 打印代码用到的php
└─print_tt.php           % 本地测试时使用的php
```

## 原理

``codeprinter.html``页面通过POST请求的方式将 账号密码与代码 发送给 ``print_ctl.php ``  
``print_ctl.php `` 验证账号密码，并保存代码  
通过调用linux端的``lpr``命令，调用打印机进行打印操作
这里我使用了 ``lpr -o prettyprint filename``，打印的效果确实不错，pretty！  

详细的部署过程，可以参见 我的 [blog][1]  


## 效果图  

![1][2]

![2][3]

![3][4]


## 一点说明

linux端 ``lpr`` 命令无法完美支持``utf-8``
解决办法有一个，但是最后我决定不使用它，因为比赛时节奏紧凑，应该没有人会特别需要中文注释。  
如果你需要的话，可以参考 [这里][5]

另外，这里的用户名和密码保存在namelist里，没有存放在数据库中，因为这其实没有必要，在如此高强度的ICPC比赛中，没有人会特意干一些TJMG有损道德的事吧，都忙着A题呢。

## TODO

如果你有更好的想法，欢迎request！！！  


  [1]: http://bigballon.github.io/icpc/2016/05/06/codePrint.html
  [2]: http://7xi3e9.com1.z0.glb.clouddn.com/xg1.png
  [3]: http://7xi3e9.com1.z0.glb.clouddn.com/xg2.png
  [4]: http://7xi3e9.com1.z0.glb.clouddn.com/xg3.png
  [5]: http://forum.ubuntu.org.cn/viewtopic.php?f=8&t=465073