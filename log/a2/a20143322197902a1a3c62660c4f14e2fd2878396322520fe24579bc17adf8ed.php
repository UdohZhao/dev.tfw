<?php

/* login/index.html */
class __TwigTemplate_4f99da29f998b8ce3baca467aaf69c9dfb1ac348ad3560e18cbc6201f91e6885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>登录 | ";
        // line 10
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link href='http://fonts.googlefonts.net/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Inline -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/examples/css/pages/login-v2.css\">

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"page-login-v2 layout-full page-dark\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class=\"page animsition\" data-animsition-in=\"fade-in\" data-animsition-out=\"fade-out\">
    <div class=\"page-content\">
      <div class=\"page-brand-info\">
        <div class=\"brand\">
          <img class=\"brand-img\" src=\"/apps/admin/views/assets/images/logo@2x.png\" alt=\"...\">
          <h2 class=\"brand-text font-size-40\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "后台管理</h2>
        </div>
        <!-- <p class=\"font-size-20\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>

      <div class=\"page-login-main\">
        <div class=\"brand visible-xs\">
          <img class=\"brand-img\" src=\"/apps/admin/views/assets/images/logo-blue@2x.png\" alt=\"...\">
          <h3 class=\"brand-text font-size-40\">";
        // line 66
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "后台管理</h3>
        </div>
        <h3 class=\"font-size-24\" style=\"text-align: center;\">登 录</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

        <form id=\"loginForm\" method=\"post\" action=\"/admin/login/index\">
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"inputEmail\">用户名</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" placeholder=\"请输入用户名\">
          </div>
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"inputPassword\">密码</label>
            <input type=\"password\" class=\"form-control\" name=\"password\"
            placeholder=\"请输入密码\">
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" placeholder=\"请输入验证码\">
              <span class=\"input-group-addon\" style=\"margin: 0; padding: 0;\">
                <img src=\"/admin/login/verifyImg\" onclick=\"this.src='/admin/login/verifyImg?'+Math.random();\" style=\"cursor: pointer;height: 36px;\">
              </span>
            </div>
          </div>
          <div class=\"form-group clearfix\">
            <div class=\"checkbox-custom checkbox-inline checkbox-primary pull-left\">
              <input type=\"checkbox\" id=\"remember\" name=\"remember\" value=\"1\">
              <label for=\"inputCheckbox\">记住用户名</label>
            </div>
            <a class=\"pull-right\" onclick='javascript:sweetAlert(\"忘记密码？\", \"请自行联系网站管理员!\", \"error\");' style=\"cursor: pointer;\">忘记密码？</a>
          </div>
          <button type=\"submit\" class=\"btn btn-primary btn-block\">登 录</button>
        </form>

        <!-- <p>No account? <a href=\"register-v2.html\">Sign Up</a></p> -->

        <footer class=\"page-copyright\">
          <p>重庆存己科技提供技术支持</p>
          <p>© 2017. All RIGHT RESERVED.</p>
          <!-- <div class=\"social\">
            <a class=\"btn btn-icon btn-round social-twitter\" href=\"javascript:void(0)\">
              <i class=\"icon bd-twitter\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"btn btn-icon btn-round social-facebook\" href=\"javascript:void(0)\">
              <i class=\"icon bd-facebook\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"btn btn-icon btn-round social-google-plus\" href=\"javascript:void(0)\">
              <i class=\"icon bd-google-plus\" aria-hidden=\"true\"></i>
            </a>
          </div> -->
        </footer>
      </div>

    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Plugins For This Page -->
  <script src=\"/apps/admin/views/assets/vendor/jquery-placeholder/jquery.placeholder.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->
  <script src=\"/apps/admin/views/assets/js/components/jquery-placeholder.js\"></script>

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  <!-- 当前页面js -->
  <script src=\"/apps/admin/views/login/js/index.js\"></script>

  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>";
    }

    public function getTemplateName()
    {
        return "login/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 74,  92 => 66,  80 => 57,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js css-menubar\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>登录 | {{ websiteName }}</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link href='http://fonts.googlefonts.net/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Inline -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/examples/css/pages/login-v2.css\">

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"page-login-v2 layout-full page-dark\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class=\"page animsition\" data-animsition-in=\"fade-in\" data-animsition-out=\"fade-out\">
    <div class=\"page-content\">
      <div class=\"page-brand-info\">
        <div class=\"brand\">
          <img class=\"brand-img\" src=\"/apps/admin/views/assets/images/logo@2x.png\" alt=\"...\">
          <h2 class=\"brand-text font-size-40\">{{ websiteName }}后台管理</h2>
        </div>
        <!-- <p class=\"font-size-20\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>

      <div class=\"page-login-main\">
        <div class=\"brand visible-xs\">
          <img class=\"brand-img\" src=\"/apps/admin/views/assets/images/logo-blue@2x.png\" alt=\"...\">
          <h3 class=\"brand-text font-size-40\">{{ websiteName }}后台管理</h3>
        </div>
        <h3 class=\"font-size-24\" style=\"text-align: center;\">登 录</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

        <form id=\"loginForm\" method=\"post\" action=\"/admin/login/index\">
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"inputEmail\">用户名</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" value=\"{{ username }}\" placeholder=\"请输入用户名\">
          </div>
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"inputPassword\">密码</label>
            <input type=\"password\" class=\"form-control\" name=\"password\"
            placeholder=\"请输入密码\">
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" placeholder=\"请输入验证码\">
              <span class=\"input-group-addon\" style=\"margin: 0; padding: 0;\">
                <img src=\"/admin/login/verifyImg\" onclick=\"this.src='/admin/login/verifyImg?'+Math.random();\" style=\"cursor: pointer;height: 36px;\">
              </span>
            </div>
          </div>
          <div class=\"form-group clearfix\">
            <div class=\"checkbox-custom checkbox-inline checkbox-primary pull-left\">
              <input type=\"checkbox\" id=\"remember\" name=\"remember\" value=\"1\">
              <label for=\"inputCheckbox\">记住用户名</label>
            </div>
            <a class=\"pull-right\" onclick='javascript:sweetAlert(\"忘记密码？\", \"请自行联系网站管理员!\", \"error\");' style=\"cursor: pointer;\">忘记密码？</a>
          </div>
          <button type=\"submit\" class=\"btn btn-primary btn-block\">登 录</button>
        </form>

        <!-- <p>No account? <a href=\"register-v2.html\">Sign Up</a></p> -->

        <footer class=\"page-copyright\">
          <p>重庆存己科技提供技术支持</p>
          <p>© 2017. All RIGHT RESERVED.</p>
          <!-- <div class=\"social\">
            <a class=\"btn btn-icon btn-round social-twitter\" href=\"javascript:void(0)\">
              <i class=\"icon bd-twitter\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"btn btn-icon btn-round social-facebook\" href=\"javascript:void(0)\">
              <i class=\"icon bd-facebook\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"btn btn-icon btn-round social-google-plus\" href=\"javascript:void(0)\">
              <i class=\"icon bd-google-plus\" aria-hidden=\"true\"></i>
            </a>
          </div> -->
        </footer>
      </div>

    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Plugins For This Page -->
  <script src=\"/apps/admin/views/assets/vendor/jquery-placeholder/jquery.placeholder.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->
  <script src=\"/apps/admin/views/assets/js/components/jquery-placeholder.js\"></script>

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  <!-- 当前页面js -->
  <script src=\"/apps/admin/views/login/js/index.js\"></script>

  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>", "login/index.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\login\\index.html");
    }
}
