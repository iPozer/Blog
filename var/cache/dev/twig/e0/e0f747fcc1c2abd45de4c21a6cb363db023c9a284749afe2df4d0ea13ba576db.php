<?php

/* home/show.html.twig */
class __TwigTemplate_006c81674b25aef45a4bdc3cec7be7e101822666b895340a3d72e95546fb591b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - Blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<main id=\"wrapper\">


    <aside id=\"left\">
        <h1>VA Blog</h1>
        <div class=\"top\">
            ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "        </div>





    </aside>

    <main>
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "    </main>

    <aside id=\"right\">
        ";
        // line 85
        $this->displayBlock('sidebar', $context, $blocks);
        // line 165
        echo "    </aside>


</main>


";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 172
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VA Blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel='stylesheet' href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/basic-template.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li> <a href = \"#\">Add a new</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                    Created by <a href=\"https://github.com/Leratony\">Leratony</a>


                </nav>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        <div>
            <div class=\"artTitle\">
                <h2>Title of article</h2>
            </div>
            <div class = \"autor\">
                <span>Author: John Doe</span>
            </div>
            <div class=\"datePubl\">
                <span>Date: 01/01/2018</span>
            </div>
            <div class = \"timePubl\">
                <span>Time: 23:03:44 </span>
            </div>
            <div class=\"picArt\">
                <img src=\"http://placehold.it/308x231\" />


                <div class=\"descriptArt\">

                    Here will be a content of news <br>
                    Here will be a content of news<br>
                    Here will be a content of news<br>
                    Here will be a content of news<br>

                </div>
                <a href=\"#\" class=\"artMore\">
                    More...
                </a>
            </div>
            <div class = \"commentsAndViews\"> 5 comments 123 views </div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 86
        echo "            <div class = \"search\"><input type = \"text\" placeholder=\"search\"></div><br>


            <div class = \"formWrapper\">
                <form action=\"/\" name = \"Enter\" method = \"post\">
                    <label class = \"Login\"> Log In:<br>
                        <input type =\"text\" name = \"login\"/>
                    </label><br>

                    <label class = \"Password\"> Enter password:<br>
                        <input type =\"password\" name = \"pswd1\"/>
                    </label>
                    <div id = \"forgotten\"><a href = \"#\">Forgot your password?</a></div>


                    <input type = \"submit\" name = \"EnterSend\" value = \"Log In\">
                </form><br>
            </div>


            <div class = \"formWrapper\">
                <form action = \"/\" name = \"Registration\" method=\"post\">
                    <label class = \"Name\"> Name: <br>
                        <input type =\"text\" name = \"UserName\">
                    </label>


                    <label> Surame: <br>
                        <input type =\"text\" name = \"UserSurName\">
                    </label>

                    <span class = \"Gender_wr\" datatype=\"radio\">
                    <span class = \"gndr\">
                         <input type=\"radio\" name=\"sex\" value=\"1\" id = \"g_m\">
                        <label class = g_1 for=\"g_m\"> Male</label>
                    </span>
                    <span class = \"gndr\">
                        <input type=\"radio\" name=\"sex\" value=\"2\" id = \"g_f\">
                        <label class = g_1 for=\"g_f\"> Female </label>
                    </span>

                </span>


            </div>
            <div class = \"BDayDiv\">

                <label>Birthday:</label>
                <input type = \"date\" name = \"date\">
            </div>

            <label> Enter password:<br>
                <input type =\"password\" name = \"pswd\">
            </label>

            <label> Confirm password:<br>
                <input type =\"password\" name = \"pswd_confirm\"><br>
            </label>

            <div class = \"regConf\">

                <input type = \"submit\" name = \"reg\" value = \"Register\">


                <div class =\"warn\">
                    By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy
                </div>
            </div>
            </form>
            </div>








        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 171,  237 => 86,  228 => 85,  186 => 49,  177 => 48,  156 => 27,  147 => 26,  133 => 13,  124 => 12,  106 => 8,  95 => 172,  93 => 171,  85 => 165,  83 => 85,  78 => 82,  76 => 48,  65 => 39,  63 => 26,  49 => 16,  47 => 12,  40 => 8,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}VA Blog{% endblock %} - Blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link rel='stylesheet' href= \"{{ asset('css/basic-template.css')}}\">

    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<main id=\"wrapper\">


    <aside id=\"left\">
        <h1>VA Blog</h1>
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li> <a href = \"#\">Add a new</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                    Created by <a href=\"https://github.com/Leratony\">Leratony</a>


                </nav>
            {% endblock %}
        </div>





    </aside>

    <main>
        {% block body %}

        <div>
            <div class=\"artTitle\">
                <h2>Title of article</h2>
            </div>
            <div class = \"autor\">
                <span>Author: John Doe</span>
            </div>
            <div class=\"datePubl\">
                <span>Date: 01/01/2018</span>
            </div>
            <div class = \"timePubl\">
                <span>Time: 23:03:44 </span>
            </div>
            <div class=\"picArt\">
                <img src=\"http://placehold.it/308x231\" />


                <div class=\"descriptArt\">

                    Here will be a content of news <br>
                    Here will be a content of news<br>
                    Here will be a content of news<br>
                    Here will be a content of news<br>

                </div>
                <a href=\"#\" class=\"artMore\">
                    More...
                </a>
            </div>
            <div class = \"commentsAndViews\"> 5 comments 123 views </div>

        {% endblock %}
    </main>

    <aside id=\"right\">
        {% block sidebar %}
            <div class = \"search\"><input type = \"text\" placeholder=\"search\"></div><br>


            <div class = \"formWrapper\">
                <form action=\"/\" name = \"Enter\" method = \"post\">
                    <label class = \"Login\"> Log In:<br>
                        <input type =\"text\" name = \"login\"/>
                    </label><br>

                    <label class = \"Password\"> Enter password:<br>
                        <input type =\"password\" name = \"pswd1\"/>
                    </label>
                    <div id = \"forgotten\"><a href = \"#\">Forgot your password?</a></div>


                    <input type = \"submit\" name = \"EnterSend\" value = \"Log In\">
                </form><br>
            </div>


            <div class = \"formWrapper\">
                <form action = \"/\" name = \"Registration\" method=\"post\">
                    <label class = \"Name\"> Name: <br>
                        <input type =\"text\" name = \"UserName\">
                    </label>


                    <label> Surame: <br>
                        <input type =\"text\" name = \"UserSurName\">
                    </label>

                    <span class = \"Gender_wr\" datatype=\"radio\">
                    <span class = \"gndr\">
                         <input type=\"radio\" name=\"sex\" value=\"1\" id = \"g_m\">
                        <label class = g_1 for=\"g_m\"> Male</label>
                    </span>
                    <span class = \"gndr\">
                        <input type=\"radio\" name=\"sex\" value=\"2\" id = \"g_f\">
                        <label class = g_1 for=\"g_f\"> Female </label>
                    </span>

                </span>


            </div>
            <div class = \"BDayDiv\">

                <label>Birthday:</label>
                <input type = \"date\" name = \"date\">
            </div>

            <label> Enter password:<br>
                <input type =\"password\" name = \"pswd\">
            </label>

            <label> Confirm password:<br>
                <input type =\"password\" name = \"pswd_confirm\"><br>
            </label>

            <div class = \"regConf\">

                <input type = \"submit\" name = \"reg\" value = \"Register\">


                <div class =\"warn\">
                    By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy
                </div>
            </div>
            </form>
            </div>








        {% endblock %}
    </aside>


</main>


{% block javascripts %}{% endblock %}
</body>
</html>", "home/show.html.twig", "/home/valeria/projects/Blog/app/Resources/views/home/show.html.twig");
    }
}
