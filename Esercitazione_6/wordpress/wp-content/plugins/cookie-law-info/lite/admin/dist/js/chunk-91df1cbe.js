(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-91df1cbe"],{"1d1c":function(t,c,n){"use strict";n("985e")},"68a1":function(t,c,n){},"985e":function(t,c,n){},e716:function(t,c,n){"use strict";n("68a1")},ea26:function(t,c,n){"use strict";n.r(c);var s=function(){var t=this,c=t._self._c;return c("div",{staticClass:"cky-section cky-zero--padding cky-zero--margin"},[t._m(0),c("div",{staticClass:"cky-section-content"},[c("div",{staticClass:"cky-app-box"},[t.account.connected||t.disconnecting?c("div",{staticClass:"cky-row"},[c("div",{staticClass:"cky-col-12"},[c("div",{staticClass:"cky-row cky-form-group cky-align-center cky-connection-status"},[c("div",{staticClass:"cky-col-12"},[c("div",{staticClass:"cky-align-center"},[c("cky-icon",{attrs:{icon:"successCircle",color:"#00aa63",width:"16px"}}),c("h4",{staticStyle:{"margin-left":"5px"}},[t._v(" "+t._s(t.$i18n.__("Your website is connected to CookieYes","cookie-law-info"))+" ")])],1)]),c("div",{staticClass:"cky-col-12"},[c("p",[t._v(" "+t._s(t.$i18n.__("You can access all the plugin settings (Cookie Banner, Cookie Manager, Languages & Policy Generators) on the web app and unlock new features like Cookie Scan and Consent Log.","cookie-law-info"))+" ")])])]),c("div",{staticClass:"cky-account-info"},[c("label",[t._v(" "+t._s(t.$i18n.__("Email","cookie-law-info"))+": "),c("span",[t._v(t._s(t.user.email))])]),c("label",[t._v(" "+t._s(t.$i18n.__("Site Key","cookie-law-info"))+": "),c("span",[t._v(t._s(t.account.website_key))])]),c("label",[t._v(" "+t._s(t.$i18n.__("Plan","cookie-law-info"))+": "),c("span",[t._v(t._s(t.plan.name))])])]),c("div",{staticClass:"cky-align-center cky-account-actions"},[c("button",{staticClass:"cky-button cky-external-link",on:{click:function(c){return c.preventDefault(),t.$router.redirectToApp()}}},[t._v(" "+t._s(t.$i18n.__("Go to Web App","cookie-law-info"))+" ")]),c("button",{staticClass:"cky-button cky-button-outline-danger",staticStyle:{"margin-left":"15px"},on:{click:t.openModal}},[t._v(" "+t._s(t.$i18n.__("Disconnect","cookie-law-info"))+" ")])]),t._m(1)])]):t._e()]),c("cky-modal",{ref:"ckyDisconnectModal",staticClass:"cky-app-modal-disconnect cky-text-center",attrs:{dismissable:!1,type:"info"},scopedSlots:t._u([{key:"body",fn:function(){return[c("h3",[t._v(" "+t._s(t.$i18n.__("Disconnect from CookieYes web app?","cookie-law-info"))+" ")]),c("p",[t._v(" "+t._s(t.$i18n.__("When you disconnect, your website will no longer be synced to your CookieYes account. You will be able to manage all your settings within WordPress. You can connect to your CookieYes account anytime later.","cookie-law-info"))+" ")])]},proxy:!0},{key:"footer",fn:function(){return[c("div",{staticClass:"cky-app-modal-actions cky-justify-center"},[c("button",{staticClass:"cky-button cky-button-outline-secondary",on:{click:t.closeModal}},[t._v(" "+t._s(t.$i18n.__("Cancel","cookie-law-info"))+" ")]),c("cky-button",{ref:"ckyButtonDisconnect",staticClass:"cky-button-danger",nativeOn:{click:function(c){return t.disconnectApp.apply(null,arguments)}}},[t._v(" "+t._s(t.$i18n.__("Disconnect","cookie-law-info"))+" "),c("template",{slot:"loader"},[t._v(t._s(t.$i18n.__("Disconnecting...","cookie-law-info")))])],2)],1)]},proxy:!0}])}),c("cky-disconnect-success")],1)])},e=[function(){var t=this,c=t._self._c;return c("div",{staticClass:"cky-section-header cky-align-center cky-justify-between"},[c("div",{staticClass:"cky-section-title"})])},function(){var t=this,c=t._self._c;return c("div",{staticClass:"cky-row cky-align-center cky-connection-status"},[c("div",{staticClass:"cky-col-4"},[c("div",{staticClass:"cky-align-center"})]),c("div",{staticClass:"cky-col-3"})])}],o=n("1f3d"),i=n("c068"),a=n("8a80"),l=function(){var t=this,c=t._self._c;return t.show?c("div",{staticClass:"cky-connect-success",attrs:{id:"cky-connect-success"}},[c("div",{staticClass:"cky-connect-success-container"},[c("div",{staticClass:"cky-connect-success-icon"}),c("div",{staticClass:"cky-connect-success-message"},[t._t("message",(function(){return[c("h2",[t._v(" "+t._s(t.$i18n.__("Your website is now disconnected from app.cookieyes.com","cookie-law-info"))+" ")])]}))],2)])]):t._e()},r=[],u=n("a2b6"),k={name:"CkyDisConnectSuccess",components:{},props:{timeout:{type:Number,default:4e3}},data(){return{show:!1}},methods:{async showMessage(){this.show=!0,await Object(u["d"])(this.timeout),this.show=!1,this.$router.redirectToDashboard(this.$route.name)}},created(){this.$root.$on("afterDisconnect",()=>{this.showMessage()})}},d=k,y=(n("1d1c"),n("2877")),_=Object(y["a"])(d,l,r,!1,null,null,null),p=_.exports,f={name:"CkySettings",mixins:[i["a"]],components:{CkyIcon:o["a"],CkyModal:a["a"],CkyDisconnectSuccess:p},data(){return{disconnecting:!1}},methods:{openModal(){this.$refs.ckyDisconnectModal.show()},closeModal(){this.$refs.ckyDisconnectModal.close()},async disconnectApp(){this.$refs.ckyButtonDisconnect.startLoading(),this.disconnecting=!0,await this.disconnect(),this.closeModal()}},computed:{plan(){return this.getInfo("plan")},user(){return this.getInfo("user")},account(){return this.getOption("account")}},mounted(){}},v=f,w=(n("e716"),Object(y["a"])(v,s,e,!1,null,null,null));c["default"]=w.exports}}]);