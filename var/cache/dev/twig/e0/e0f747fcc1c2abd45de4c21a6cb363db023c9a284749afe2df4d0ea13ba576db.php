<?php

/* home/show.html.twig */
class __TwigTemplate_006c81674b25aef45a4bdc3cec7be7e101822666b895340a3d72e95546fb591b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'user' => array($this, 'block_user'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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

    // line 43
    public function block_user($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 44
        echo "            <span>Hello, guest!</span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 48
        echo "
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
                        <input type =\"text\" name = \"UserSurName\"><br>
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

    // line 121
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
        return array (  220 => 121,  142 => 48,  133 => 47,  122 => 44,  113 => 43,  71 => 9,  62 => 8,  44 => 4,  11 => 2,);
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
{% extends 'base.html.twig' %}

    {% block title %}Home{% endblock %}



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

            {% block user %}
            <span>Hello, guest!</span>
            {% endblock %}

            {% block sidebar %}

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
                        <input type =\"text\" name = \"UserSurName\"><br>
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




{% block javascripts %}{% endblock %}
", "home/show.html.twig", "/home/valeria/projects/Blog/app/Resources/views/home/show.html.twig");
    }
}
