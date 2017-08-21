<?php

/* newHouseCatalog/add.html */
class __TwigTemplate_e53fdf4a75e8440433931e0beb21a3e42ef2e0b4d99b28ecd6aa0b41daf95bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "newHouseCatalog/add.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"/public/webuploader-0.1.5/dist/webuploader.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/webuploader-0.1.5/examples/image-upload/style.css\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 房屋管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加新房条目</h3>
      </div>
      <div id=\"wrapper\">
          <div id=\"container\">
              <!--头部，相册选择和格式选择-->
              <div id=\"uploader\">
                  <div class=\"queueList\">
                      <div id=\"dndArea\" class=\"placeholder\">
                          <div id=\"filePicker\"></div>
                          <p>请选择需要上传的轮播图片，单次最多可选300张</p>
                      </div>
                  </div>
                  <div class=\"statusBar\" style=\"display:none;\">
                      <div class=\"progress\">
                          <span class=\"text\">0%</span>
                          <span class=\"percentage\"></span>
                      </div><div class=\"info\"></div>
                      <div class=\"btns\">
                          <div id=\"filePicker2\"></div><div class=\"uploadBtn\">开始上传</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/newHouseCatalog/add/id/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"hcid\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["hcid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"pid\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["pid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"slideshow\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "slideshow", array()), "html", null, true);
        echo "\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">关联城市</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cid\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cid", array()), "html", null, true);
        echo "\" placeholder=\"请输入城市名称\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"community\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "community", array()), "html", null, true);
        echo "\" placeholder=\"请输入小区\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">价格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"price\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "price", array()), "html", null, true);
        echo "\" placeholder=\"请输入价格\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示价格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"show_price\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "show_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入展示价格\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">特点</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"trait\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "trait", array()), "html", null, true);
        echo "\" placeholder=\"请输入特点（以英文逗号分隔）例如：AAA,BBB,CCC\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"area\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "area", array()), "html", null, true);
        echo "\" placeholder=\"请输入面积\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">地址</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"address\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "address", array()), "html", null, true);
        echo "\" placeholder=\"请输入地址\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">户型</label>
            <div class=\"col-sm-10\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["htype"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 96
            echo "              <label class=\"checkbox-inline\">
                  <input type=\"checkbox\" id=\"htype\" name=\"htype[]\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
              </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">产权类型</label>
            <div class=\"col-sm-10\">
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prtype"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 106
            echo "              <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"prtype\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
              </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
            <div class=\"col-sm-10\">
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["house_type"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 116
            echo "              <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"house_type\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
              </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">物业类型</label>
            <div class=\"col-sm-10\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptype"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 126
            echo "              <label class=\"checkbox-inline\">
                  <input type=\"checkbox\" id=\"ptype\" name=\"ptype[]\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
              </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-success\">下一步</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
";
    }

    // line 145
    public function block_js($context, array $blocks = array())
    {
        // line 146
        echo "<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/newHouseCatalog/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "newHouseCatalog/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 146,  279 => 145,  261 => 130,  250 => 127,  247 => 126,  243 => 125,  236 => 120,  225 => 117,  222 => 116,  218 => 115,  211 => 110,  200 => 107,  197 => 106,  193 => 105,  186 => 100,  175 => 97,  172 => 96,  168 => 95,  159 => 89,  150 => 83,  141 => 77,  132 => 71,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block css %}
<link rel=\"stylesheet\" href=\"/public/webuploader-0.1.5/dist/webuploader.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/webuploader-0.1.5/examples/image-upload/style.css\" />
{% endblock %}
{% block content %}
<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 房屋管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加新房条目</h3>
      </div>
      <div id=\"wrapper\">
          <div id=\"container\">
              <!--头部，相册选择和格式选择-->
              <div id=\"uploader\">
                  <div class=\"queueList\">
                      <div id=\"dndArea\" class=\"placeholder\">
                          <div id=\"filePicker\"></div>
                          <p>请选择需要上传的轮播图片，单次最多可选300张</p>
                      </div>
                  </div>
                  <div class=\"statusBar\" style=\"display:none;\">
                      <div class=\"progress\">
                          <span class=\"text\">0%</span>
                          <span class=\"percentage\"></span>
                      </div><div class=\"info\"></div>
                      <div class=\"btns\">
                          <div id=\"filePicker2\"></div><div class=\"uploadBtn\">开始上传</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/newHouseCatalog/add/id/{{ data.id }}\" method=\"post\">
        <input type=\"hidden\" name=\"hcid\" value=\"{{ hcid }}\">
        <input type=\"hidden\" name=\"pid\" value=\"{{ pid }}\">
        <input type=\"hidden\" name=\"slideshow\" value=\"{{ data.slideshow }}\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">关联城市</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cid\" value=\"{{ data.cid }}\" placeholder=\"请输入城市名称\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"community\" value=\"{{ data.community }}\" placeholder=\"请输入小区\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">价格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"price\" value=\"{{ data.price }}\" placeholder=\"请输入价格\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示价格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"show_price\" value=\"{{ data.show_price }}\" placeholder=\"请输入展示价格\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">特点</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"trait\" value=\"{{ data.trait }}\" placeholder=\"请输入特点（以英文逗号分隔）例如：AAA,BBB,CCC\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"area\" value=\"{{ data.area }}\" placeholder=\"请输入面积\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">地址</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"address\" value=\"{{ data.address }}\" placeholder=\"请输入地址\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">户型</label>
            <div class=\"col-sm-10\">
            {% for k,v in htype %}
              <label class=\"checkbox-inline\">
                  <input type=\"checkbox\" id=\"htype\" name=\"htype[]\" value=\"{{ v }}\"> {{ v }}
              </label>
            {% endfor %}
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">产权类型</label>
            <div class=\"col-sm-10\">
            {% for k,v in prtype %}
              <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"prtype\" value=\"{{ v }}\"> {{ v }}
              </label>
            {% endfor %}
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
            <div class=\"col-sm-10\">
            {% for k,v in house_type %}
              <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"house_type\" value=\"{{ v }}\"> {{ v }}
              </label>
            {% endfor %}
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">物业类型</label>
            <div class=\"col-sm-10\">
            {% for k,v in ptype %}
              <label class=\"checkbox-inline\">
                  <input type=\"checkbox\" id=\"ptype\" name=\"ptype[]\" value=\"{{ v }}\"> {{ v }}
              </label>
            {% endfor %}
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-success\">下一步</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
{% endblock %}
{% block js %}
<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/newHouseCatalog/js/add.js\"></script>
{% endblock %}", "newHouseCatalog/add.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\newHouseCatalog\\add.html");
    }
}
