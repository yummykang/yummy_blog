<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>yummykang</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>

<!-- 主题样式 -->
<link href="/Public/static/js/ExtJs/lib/packages/ext-theme-neptune/build/resources/ext-theme-neptune-all.css" rel="stylesheet" type="text/css"  />
<!-- ico图标样式 -->
<link href="/Public/static/css/icon.css" rel="stylesheet" type="text/css"  />
<!-- 自定义样式 -->

<link href="/Public/static/css/system.css" rel="stylesheet" type="text/css" />

<!-- ExtJs入口文件 -->
<script src="/Public/static/js/ExtJs/lib/ext-all.js" charset="UTF-8" type="text/javascript"></script>

<!-- Chart引用文件 -->
<script src="/Public/static/js/ExtJs/lib/packages/sencha-charts/build/sencha-charts.js"></script>
<!-- 简体中文语言包 -->
<script src="/Public/static/js/ExtJs/lib/packages/ext-locale/build/ext-locale-zh_CN.js"></script>
<!-- 脚本程序 -->

    <script>
		//定义验证码控件  
		Ext.define('CheckCode',{  
		    extend: 'Ext.form.field.Text',   
		    alias: 'widget.checkcode',  
		    inputTyle:'codefield',  
		    codeUrl:Ext.BLANK_IMAGE_URL,  
		    isLoader:true,
		    onRender:function(ct,position){  
		        this.callParent(arguments);  
		        this.codeEl = ct.createChild({ tag: 'img', src: Ext.BLANK_IMAGE_URL});  
		        this.codeEl.addCls('x-form-code');  
		        this.codeEl.on('click', this.loadCodeImg, this);  
		          
		        if (this.isLoader) this.loadCodeImg();  
		    },  
		    alignErrorIcon: function() {  
		        this.errorIcon.alignTo(this.codeEl, 'tl-tr', [2, 0]);  
		    },  
		    //如果浏览器发现url不变，就认为图片没有改变，就会使用缓存中的图片，而不是重新向服务器请求，所以需要加一个参数（如：Math.random()），改变url 
		    loadCodeImg: function() {  
		        this.codeEl.set({ src: '<?php echo U('Public/verify');?>'+'?id=' + Math.random() });  
		    }  
		});
		
        Ext.onReady(function(){
				var checkcode = Ext.create('CheckCode',{  
                    fieldCls : 'checkcode-ico',  
                    fieldLabel : '验证码',  
                    name : 'verify',  
                    id : 'verify',  
                    allowBlank : false,  
                    isLoader:true,  
                    blankText : '请输入验证码',  
					emptyText: '请输入验证码',
                    codeUrl: 'getCode',
                });
				
				
            Ext.create('Ext.window.Window', {
                title: '用户登录',
                draggable: false,
                closable: false,
				resizable : false,
                layout: 'fit',
                items: { 
                    xtype: 'form',
                    id: 'loginform',
					bodyPadding : 10,
                    defaultType: 'textfield',
                    shrinkWrap: 3,
                    bodyCls: 'loginformbg',
                    fieldDefaults: {
                        allowBlank: false,
                        labelAlign: 'center',
                        labelWidth: 50,
                        labelSeparator: '',
						vtype : 'alphanum',
						vtypeText : '只能是数字或字母'
                    },
                    items: [{
                        fieldLabel: '用户名',
                        name: 'name',
						id:'username',
                        emptyText: '请输入用户名',
                        fieldCls: 'username-ico'						
                    }, {
                        fieldLabel: '密&nbsp;&nbsp;码',
                        name: 'password',
						id:'password',
                        emptyText: '请输入密码',
                        inputType: 'password',
                        fieldCls: 'userpassword-ico'
                    
                    }, checkcode]
                },
				buttons: [
				  {
                        text: '登录',
                        iconCls: 'Doorin',
                        id: 'loginbtn',
                        handler: function(){
                            //得到form  
                            var basic = Ext.getCmp('loginform');
                            if (basic.isValid()) {
                                basic.submit({
                                    waitMsg: '正在登录,请等待...',
                                    clientValidation: true,//要经过客户端验证的  
                                    url: '<?php echo U('login');?>',
                                    method: 'POST',
                                    success: function(form, action){
                                        if (action.result.msg == 'OK') {
											Ext.Msg.alert('提示', '登录成功，页面正在跳转……');
                                            window.location.href=action.result.url;
                                        }
                                    },
                                    failure: function(form, action){
                                        Ext.Msg.alert('提示', action.result.msg, function(){
                                            basic.reset();
											Ext.getCmp('verify').loadCodeImg();
											Ext.getCmp('username').focus();
                                        });
                                    }
                                });
                            }
                        }
                    }
				],
				buttonAlign : 'center',
                listeners: {
                    afterRender: function(thisForm, options){
                        this.keyNav = Ext.create('Ext.util.KeyNav', this.el, {
                            enter: function(){
                                var btn = Ext.getCmp('loginbtn');
                                btn.handler();
                            },
                            scope: this
                        });
                    }
                }
            }).show();
 
        });
    </script>

</head>
<body>


</body>
</html>