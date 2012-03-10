


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHPUnit-Cake2/Lib/Utility/FolderExt.php at master · dereuromark/PHPUnit-Cake2 · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="AIcmeHtOO1RTm4HAf/QbM4XpBS5gpa8JV3Ens45b3og=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github-c1231dbd75402200b63fec9cd06ba0ee4fce0677.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github2-479c7e81b5a5a7e0684fbf37f7bf89916417f645.css" media="screen" rel="stylesheet" type="text/css" />
    

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/jquery-5b140862bd914d3619171dece9be92269c2b1fe1.js" type="text/javascript"></script>
    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/github-b4102a9465f9c4befb1870f7b174c771b2c35729.js" type="text/javascript"></script>
    

      <link rel='permalink' href='/dereuromark/PHPUnit-Cake2/blob/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff/Lib/Utility/FolderExt.php'>
    <meta property="og:title" content="PHPUnit-Cake2"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/dereuromark/PHPUnit-Cake2"/>
    <meta property="og:image" content="https://a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-140.png?1329275960"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="PHPUnit-Cake2 - PHPUnit files needed to run PHPUnit as standalone in Cake 2.0"/>

    <meta name="description" content="PHPUnit-Cake2 - PHPUnit files needed to run PHPUnit as standalone in Cake 2.0" />
  <link href="https://github.com/dereuromark/PHPUnit-Cake2/commits/master.atom" rel="alternate" title="Recent Commits to PHPUnit-Cake2:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public fork env-production " data-blob-contribs-enabled="yes">
    
    
    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo" href="https://github.com">
            <!--[if IE]>
            <img alt="GitHub" class="github-logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7.png?1323882778" />
            <img alt="GitHub" class="github-logo-hover" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7-hover.png?1324325424" />
            <![endif]-->
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1323882778" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1324325424" />
          </a>

                  <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="top-nav logged_out">
        <li class="pricing"><a href="https://github.com/plans">Signup and Pricing</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2Fdereuromark%2FPHPUnit-Cake2%2Fblob%2Fmaster%2FLib%2FUtility%2FFolderExt.php">Login</a></li>
    </ul>



          
        </div>
      </div>

      

            <div class="site" itemscope itemtype="http://schema.org/WebPage">
      <div class="container">
        <div class="pagehead repohead instapaper_ignore readability-menu">
        <div class="title-actions-bar">
          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/dereuromark" itemprop="url" rel="author">            <span itemprop="title">dereuromark</span>
            </a> /
            <strong><a href="/dereuromark/PHPUnit-Cake2" class="js-current-repository">PHPUnit-Cake2</a></strong>
              <span class="fork-flag">
                <span class="text">forked from <a href="/Hyra/PHPUnit-Cake2">Hyra/PHPUnit-Cake2</a></span>
              </span>
          </h1>
          



              <ul class="pagehead-actions">


          <li><a href="/login?return_to=%2Fdereuromark%2FPHPUnit-Cake2" class="minibutton btn-watch watch-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Watch</span></a></li>
          <li><a href="/login?return_to=%2Fdereuromark%2FPHPUnit-Cake2" class="minibutton btn-fork fork-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Fork</span></a></li>


      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers ">
            <a href="/dereuromark/PHPUnit-Cake2/watchers" title="Watchers" class="tooltipped downwards">
              5
            </a>
          </li>
          <li class="forks">
            <a href="/dereuromark/PHPUnit-Cake2/network" title="Forks" class="tooltipped downwards">
              3
            </a>
          </li>
        </ul>
      </li>
    </ul>

        </div>

          

  <ul class="tabs">
    <li><a href="/dereuromark/PHPUnit-Cake2" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/dereuromark/PHPUnit-Cake2/network" highlight="repo_networkrepo_fork_queue">Network</a>
    <li><a href="/dereuromark/PHPUnit-Cake2/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>



    <li><a href="/dereuromark/PHPUnit-Cake2/graphs" highlight="repo_graphsrepo_contributors">Stats &amp; Graphs</a></li>

  </ul>

  
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/dereuromark/PHPUnit-Cake2/tree-list/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff"
      data-blob-url-prefix="/dereuromark/PHPUnit-Cake2/blob/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff"
    >

  <div class="breadcrumb">
    <span class="bold"><a href="/dereuromark/PHPUnit-Cake2">PHPUnit-Cake2</a></span> /
    <input class="tree-finder-input js-navigation-enable" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>

    <div class="octotip">
      <p>
        <a href="/dereuromark/PHPUnit-Cake2/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever" rel="nofollow">Dismiss</a>
        <span class="bold">Octotip:</span> You've activated the <em>file finder</em>
        by pressing <span class="kbd">t</span> Start typing to filter the
        file list. Use <span class="kbd badmono">↑</span> and
        <span class="kbd badmono">↓</span> to navigate,
        <span class="kbd">enter</span> to view files.
      </p>
    </div>

  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list js-navigation-container">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form>
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        <span>Go</span>
      </button>
    </div>
  </form>
</div>


<div class="subnav-bar">

  <ul class="actions subnav">
    <li><a href="/dereuromark/PHPUnit-Cake2/tags" class="blank" highlight="repo_tags">Tags <span class="counter">0</span></a></li>
    <li><a href="/dereuromark/PHPUnit-Cake2/downloads" class="blank downloads-blank" highlight="repo_downloads">Downloads <span class="counter">0</span></a></li>
    
  </ul>

  <ul class="scope">
    <li class="switcher">

      <div class="context-menu-container js-menu-container">
        <a href="#"
           class="minibutton bigger switcher js-menu-target js-commitish-button btn-branch repo-tree"
           data-master-branch="master"
           data-ref="master">
          <span><span class="icon"></span><i>branch:</i> master</span>
        </a>

        <div class="context-pane commitish-context js-menu-content">
          <a href="javascript:;" class="close js-menu-close"></a>
          <div class="context-title">Switch Branches/Tags</div>
          <div class="context-body pane-selector commitish-selector js-filterable-commitishes">
            <div class="filterbar">
              <div class="placeholder-field js-placeholder-field">
                <label class="placeholder" for="context-commitish-filter-field" data-placeholder-mode="sticky">Filter branches/tags</label>
                <input type="text" id="context-commitish-filter-field" class="commitish-filter" />
              </div>

              <ul class="tabs">
                <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                <li><a href="#" data-filter="tags">Tags</a></li>
              </ul>
            </div>

              <div class="commitish-item branch-commitish selector-item">
                <h4>
                    <a href="/dereuromark/PHPUnit-Cake2/blob/master/Lib/Utility/FolderExt.php" data-name="master" rel="nofollow">master</a>
                </h4>
              </div>


            <div class="no-results" style="display:none">Nothing to show</div>
          </div>
        </div><!-- /.commitish-context-context -->
      </div>

    </li>
  </ul>

  <ul class="subnav with-scope">

    <li><a href="/dereuromark/PHPUnit-Cake2" class="selected" highlight="repo_source">Files</a></li>
    <li><a href="/dereuromark/PHPUnit-Cake2/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/dereuromark/PHPUnit-Cake2/branches" class="" highlight="repo_branches" rel="nofollow">Branches <span class="counter">1</span></a></li>
  </ul>

</div>

  
  
  


          

        </div><!-- /.repohead -->

        





<!-- block_view_fragment_key: views6/v8/blob:v19:d6fb0328abb0eca4c5c4484602400326 -->
  <div id="slider">

    <div class="breadcrumb" data-path="Lib/Utility/FolderExt.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/dereuromark/PHPUnit-Cake2/tree/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff" class="js-rewrite-sha" itemprop="url"><span itemprop="title">PHPUnit-Cake2</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/dereuromark/PHPUnit-Cake2/tree/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff/Lib" class="js-rewrite-sha" itemscope="url"><span itemprop="title">Lib</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/dereuromark/PHPUnit-Cake2/tree/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff/Lib/Utility" class="js-rewrite-sha" itemscope="url"><span itemprop="title">Utility</span></a></span> / <strong class="final-path">FolderExt.php</strong> <span class="js-clippy clippy-button " data-clipboard-text="Lib/Utility/FolderExt.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>


      <div class="commit file-history-tease" data-path="Lib/Utility/FolderExt.php/">
        <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/6b6225db96d6fb4a34c6d50a9171d13f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
        <span class="author"><a href="/dereuromark">dereuromark</a></span>
        <time class="js-relative-date" datetime="2012-02-21T06:55:37-08:00" title="2012-02-21 06:55:37">February 21, 2012</time>
        <div class="commit-title">
            <a href="/dereuromark/PHPUnit-Cake2/commit/32907b5b98be6f9f8de7e91312c1edba2e383597" class="message">update FolderExt (fixed version for Folder class)</a>
        </div>

        <div class="participation">
          <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
          
        </div>
        <div id="blob_contributors_box" style="display:none">
          <h2>Users on GitHub who have contributed to this file</h2>
          <ul class="facebox-user-list">
            <li>
              <img height="24" src="https://secure.gravatar.com/avatar/6b6225db96d6fb4a34c6d50a9171d13f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
              <a href="/dereuromark">dereuromark</a>
            </li>
          </ul>
        </div>
      </div>

    <div class="frames">
      <div class="frame frame-center" data-path="Lib/Utility/FolderExt.php/" data-permalink-url="/dereuromark/PHPUnit-Cake2/blob/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff/Lib/Utility/FolderExt.php" data-title="PHPUnit-Cake2/Lib/Utility/FolderExt.php at master · dereuromark/PHPUnit-Cake2 · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://a248.e.akamai.net/assets.github.com/images/icons/txt.png?1284681402" width="16" /></span>
                <span class="mode" title="File Mode">100644</span>
                  <span>816 lines (742 sloc)</span>
                <span>22.979 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter js-rewrite-sha" href="/dereuromark/PHPUnit-Cake2/edit/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff/Lib/Utility/FolderExt.php" data-method="post" rel="nofollow"><span>Edit this file</span></a>
                  </li>

                <li>
                  <a href="/dereuromark/PHPUnit-Cake2/raw/master/Lib/Utility/FolderExt.php" class="minibutton btn-raw grouped-button bigger lighter" id="raw-url"><span><span class="icon"></span>Raw</span></a>
                </li>
                  <li>
                    <a href="/dereuromark/PHPUnit-Cake2/blame/master/Lib/Utility/FolderExt.php" class="minibutton btn-blame grouped-button bigger lighter"><span><span class="icon"></span>Blame</span></a>
                  </li>
                <li>
                  <a href="/dereuromark/PHPUnit-Cake2/commits/master/Lib/Utility/FolderExt.php" class="minibutton btn-history grouped-button bigger lighter" rel="nofollow"><span><span class="icon"></span>History</span></a>
                </li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * Convenience class for handling directories.</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * PHP 5</span></div><div class='line' id='LC6'><span class="sd"> *</span></div><div class='line' id='LC7'><span class="sd"> * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)</span></div><div class='line' id='LC8'><span class="sd"> * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)</span></div><div class='line' id='LC9'><span class="sd"> *</span></div><div class='line' id='LC10'><span class="sd"> * Licensed under The MIT License</span></div><div class='line' id='LC11'><span class="sd"> * Redistributions of files must retain the above copyright notice.</span></div><div class='line' id='LC12'><span class="sd"> *</span></div><div class='line' id='LC13'><span class="sd"> * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)</span></div><div class='line' id='LC14'><span class="sd"> * @link          http://cakephp.org CakePHP(tm) Project</span></div><div class='line' id='LC15'><span class="sd"> * @package       Cake.Utility</span></div><div class='line' id='LC16'><span class="sd"> * @since         CakePHP(tm) v 0.2.9</span></div><div class='line' id='LC17'><span class="sd"> * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="sd">/**</span></div><div class='line' id='LC21'><span class="sd"> * Folder structure browser, lists folders and files.</span></div><div class='line' id='LC22'><span class="sd"> * Provides an Object interface for Common directory related tasks.</span></div><div class='line' id='LC23'><span class="sd"> *</span></div><div class='line' id='LC24'><span class="sd"> * @package       Cake.Utility</span></div><div class='line' id='LC25'><span class="sd"> */</span></div><div class='line' id='LC26'><span class="k">class</span> <span class="nc">FolderExt</span> <span class="p">{</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'><span class="sd">/**</span></div><div class='line' id='LC29'><span class="sd"> * Default scheme for FolderExt::copy</span></div><div class='line' id='LC30'><span class="sd"> * Recursivly merges subfolders with the same name </span></div><div class='line' id='LC31'><span class="sd"> *</span></div><div class='line' id='LC32'><span class="sd"> * @constant MERGE</span></div><div class='line' id='LC33'><span class="sd"> */</span></div><div class='line' id='LC34'>	<span class="k">const</span> <span class="no">MERGE</span> <span class="o">=</span> <span class="s1">&#39;merge&#39;</span><span class="p">;</span></div><div class='line' id='LC35'><br/></div><div class='line' id='LC36'><span class="sd">/**</span></div><div class='line' id='LC37'><span class="sd"> * Overwrite scheme for FolderExt::copy</span></div><div class='line' id='LC38'><span class="sd"> * subfolders with the same name will be replaced</span></div><div class='line' id='LC39'><span class="sd"> *</span></div><div class='line' id='LC40'><span class="sd"> * @constant OVERWRITE</span></div><div class='line' id='LC41'><span class="sd"> */</span></div><div class='line' id='LC42'>	<span class="k">const</span> <span class="no">OVERWRITE</span> <span class="o">=</span> <span class="s1">&#39;overwrite&#39;</span><span class="p">;</span></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'><span class="sd">/**</span></div><div class='line' id='LC45'><span class="sd"> * Skip scheme for FolderExt::copy</span></div><div class='line' id='LC46'><span class="sd"> * if a subfolder with the same name exists it will be skipped</span></div><div class='line' id='LC47'><span class="sd"> *</span></div><div class='line' id='LC48'><span class="sd"> * @constant SKIP</span></div><div class='line' id='LC49'><span class="sd"> */</span></div><div class='line' id='LC50'>	<span class="k">const</span> <span class="no">SKIP</span> <span class="o">=</span> <span class="s1">&#39;skip&#39;</span><span class="p">;</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'><span class="sd">/**</span></div><div class='line' id='LC53'><span class="sd"> * Path to Folder.</span></div><div class='line' id='LC54'><span class="sd"> *</span></div><div class='line' id='LC55'><span class="sd"> * @var string</span></div><div class='line' id='LC56'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::$path</span></div><div class='line' id='LC57'><span class="sd"> */</span></div><div class='line' id='LC58'>	<span class="k">public</span> <span class="nv">$path</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'><span class="sd">/**</span></div><div class='line' id='LC61'><span class="sd"> * Sortedness. Whether or not list results</span></div><div class='line' id='LC62'><span class="sd"> * should be sorted by name.</span></div><div class='line' id='LC63'><span class="sd"> *</span></div><div class='line' id='LC64'><span class="sd"> * @var boolean</span></div><div class='line' id='LC65'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::$sort</span></div><div class='line' id='LC66'><span class="sd"> */</span></div><div class='line' id='LC67'>	<span class="k">public</span> <span class="nv">$sort</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC68'><br/></div><div class='line' id='LC69'><span class="sd">/**</span></div><div class='line' id='LC70'><span class="sd"> * Mode to be used on create. Does nothing on windows platforms.</span></div><div class='line' id='LC71'><span class="sd"> *</span></div><div class='line' id='LC72'><span class="sd"> * @var integer</span></div><div class='line' id='LC73'><span class="sd"> * http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::$mode</span></div><div class='line' id='LC74'><span class="sd"> */</span></div><div class='line' id='LC75'>	<span class="k">public</span> <span class="nv">$mode</span> <span class="o">=</span> <span class="mo">0755</span><span class="p">;</span></div><div class='line' id='LC76'><br/></div><div class='line' id='LC77'><span class="sd">/**</span></div><div class='line' id='LC78'><span class="sd"> * Holds messages from last method.</span></div><div class='line' id='LC79'><span class="sd"> *</span></div><div class='line' id='LC80'><span class="sd"> * @var array</span></div><div class='line' id='LC81'><span class="sd"> */</span></div><div class='line' id='LC82'>	<span class="k">protected</span> <span class="nv">$_messages</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC83'><br/></div><div class='line' id='LC84'><span class="sd">/**</span></div><div class='line' id='LC85'><span class="sd"> * Holds errors from last method.</span></div><div class='line' id='LC86'><span class="sd"> *</span></div><div class='line' id='LC87'><span class="sd"> * @var array</span></div><div class='line' id='LC88'><span class="sd"> */</span></div><div class='line' id='LC89'>	<span class="k">protected</span> <span class="nv">$_errors</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC90'><br/></div><div class='line' id='LC91'><span class="sd">/**</span></div><div class='line' id='LC92'><span class="sd"> * Holds array of complete directory paths.</span></div><div class='line' id='LC93'><span class="sd"> *</span></div><div class='line' id='LC94'><span class="sd"> * @var array</span></div><div class='line' id='LC95'><span class="sd"> */</span></div><div class='line' id='LC96'>	<span class="k">protected</span> <span class="nv">$_directories</span><span class="p">;</span></div><div class='line' id='LC97'><br/></div><div class='line' id='LC98'><span class="sd">/**</span></div><div class='line' id='LC99'><span class="sd"> * Holds array of complete file paths.</span></div><div class='line' id='LC100'><span class="sd"> *</span></div><div class='line' id='LC101'><span class="sd"> * @var array</span></div><div class='line' id='LC102'><span class="sd"> */</span></div><div class='line' id='LC103'>	<span class="k">protected</span> <span class="nv">$_files</span><span class="p">;</span></div><div class='line' id='LC104'><br/></div><div class='line' id='LC105'><span class="sd">/**</span></div><div class='line' id='LC106'><span class="sd"> * Constructor.</span></div><div class='line' id='LC107'><span class="sd"> *</span></div><div class='line' id='LC108'><span class="sd"> * @param string $path Path to folder</span></div><div class='line' id='LC109'><span class="sd"> * @param boolean $create Create folder if not found</span></div><div class='line' id='LC110'><span class="sd"> * @param mixed $mode Mode (CHMOD) to apply to created folder, false to ignore</span></div><div class='line' id='LC111'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#Folder</span></div><div class='line' id='LC112'><span class="sd"> */</span></div><div class='line' id='LC113'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$path</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$create</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$mode</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC114'>		<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC115'>			<span class="nv">$path</span> <span class="o">=</span> <span class="nx">TMP</span><span class="p">;</span></div><div class='line' id='LC116'>		<span class="p">}</span></div><div class='line' id='LC117'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$mode</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC118'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span> <span class="o">=</span> <span class="nv">$mode</span><span class="p">;</span></div><div class='line' id='LC119'>		<span class="p">}</span></div><div class='line' id='LC120'><br/></div><div class='line' id='LC121'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nv">$create</span> <span class="o">===</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC122'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">);</span></div><div class='line' id='LC123'>		<span class="p">}</span></div><div class='line' id='LC124'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">isAbsolute</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC125'>			<span class="nv">$path</span> <span class="o">=</span> <span class="nb">realpath</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC126'>		<span class="p">}</span></div><div class='line' id='LC127'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC128'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cd</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC129'>		<span class="p">}</span></div><div class='line' id='LC130'>	<span class="p">}</span></div><div class='line' id='LC131'><br/></div><div class='line' id='LC132'><span class="sd">/**</span></div><div class='line' id='LC133'><span class="sd"> * Return current path.</span></div><div class='line' id='LC134'><span class="sd"> *</span></div><div class='line' id='LC135'><span class="sd"> * @return string Current path</span></div><div class='line' id='LC136'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::pwd</span></div><div class='line' id='LC137'><span class="sd"> */</span></div><div class='line' id='LC138'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">pwd</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC139'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">;</span></div><div class='line' id='LC140'>	<span class="p">}</span></div><div class='line' id='LC141'><br/></div><div class='line' id='LC142'><span class="sd">/**</span></div><div class='line' id='LC143'><span class="sd"> * Change directory to $path.</span></div><div class='line' id='LC144'><span class="sd"> *</span></div><div class='line' id='LC145'><span class="sd"> * @param string $path Path to the directory to change to</span></div><div class='line' id='LC146'><span class="sd"> * @return string The new path. Returns false on failure</span></div><div class='line' id='LC147'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::cd</span></div><div class='line' id='LC148'><span class="sd"> */</span></div><div class='line' id='LC149'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">cd</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC150'>		<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">realpath</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC151'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC152'>			<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span> <span class="o">=</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC153'>		<span class="p">}</span></div><div class='line' id='LC154'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC155'>	<span class="p">}</span></div><div class='line' id='LC156'><br/></div><div class='line' id='LC157'><span class="sd">/**</span></div><div class='line' id='LC158'><span class="sd"> * Returns an array of the contents of the current directory.</span></div><div class='line' id='LC159'><span class="sd"> * The returned array holds two arrays: One of directories and one of files.</span></div><div class='line' id='LC160'><span class="sd"> *</span></div><div class='line' id='LC161'><span class="sd"> * @param boolean $sort Whether you want the results sorted, set this and the sort property</span></div><div class='line' id='LC162'><span class="sd"> *   to false to get unsorted results.</span></div><div class='line' id='LC163'><span class="sd"> * @param mixed $exceptions Either an array or boolean true will not grab dot files</span></div><div class='line' id='LC164'><span class="sd"> * @param boolean $fullPath True returns the full path</span></div><div class='line' id='LC165'><span class="sd"> * @return mixed Contents of current directory as an array, an empty array on failure</span></div><div class='line' id='LC166'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::read</span></div><div class='line' id='LC167'><span class="sd"> */</span></div><div class='line' id='LC168'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">read</span><span class="p">(</span><span class="nv">$sort</span> <span class="o">=</span> <span class="k">true</span><span class="p">,</span> <span class="nv">$exceptions</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$fullPath</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC169'>		<span class="nv">$dirs</span> <span class="o">=</span> <span class="nv">$files</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC170'><br/></div><div class='line' id='LC171'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pwd</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC172'>			<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">,</span> <span class="nv">$files</span><span class="p">);</span></div><div class='line' id='LC173'>		<span class="p">}</span></div><div class='line' id='LC174'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC175'>			<span class="nv">$exceptions</span> <span class="o">=</span> <span class="nb">array_flip</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">);</span></div><div class='line' id='LC176'>		<span class="p">}</span></div><div class='line' id='LC177'>		<span class="nv">$skipHidden</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">[</span><span class="s1">&#39;.&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nv">$exceptions</span> <span class="o">===</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC178'><br/></div><div class='line' id='LC179'>		<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC180'>			<span class="nv">$iterator</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">DirectoryIterator</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">);</span></div><div class='line' id='LC181'>		<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC182'>			<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">,</span> <span class="nv">$files</span><span class="p">);</span></div><div class='line' id='LC183'>		<span class="p">}</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$iterator</span> <span class="k">as</span> <span class="nv">$item</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC186'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDot</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC187'>				<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC188'>			<span class="p">}</span></div><div class='line' id='LC189'>			<span class="nv">$name</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">getFileName</span><span class="p">();</span></div><div class='line' id='LC190'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$skipHidden</span> <span class="o">&amp;&amp;</span> <span class="nv">$name</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">===</span> <span class="s1">&#39;.&#39;</span> <span class="o">||</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">[</span><span class="nv">$name</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC191'>				<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC192'>			<span class="p">}</span></div><div class='line' id='LC193'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$fullPath</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC194'>				<span class="nv">$name</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">getPathName</span><span class="p">();</span></div><div class='line' id='LC195'>			<span class="p">}</span></div><div class='line' id='LC196'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDir</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC197'>				<span class="nv">$dirs</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$name</span><span class="p">;</span></div><div class='line' id='LC198'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC199'>				<span class="nv">$files</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$name</span><span class="p">;</span></div><div class='line' id='LC200'>			<span class="p">}</span></div><div class='line' id='LC201'>		<span class="p">}</span></div><div class='line' id='LC202'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$sort</span> <span class="o">||</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sort</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC203'>			<span class="nb">sort</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">);</span></div><div class='line' id='LC204'>			<span class="nb">sort</span><span class="p">(</span><span class="nv">$files</span><span class="p">);</span></div><div class='line' id='LC205'>		<span class="p">}</span></div><div class='line' id='LC206'>		<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">,</span> <span class="nv">$files</span><span class="p">);</span></div><div class='line' id='LC207'>	<span class="p">}</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'><span class="sd">/**</span></div><div class='line' id='LC210'><span class="sd"> * Returns an array of all matching files in current directory.</span></div><div class='line' id='LC211'><span class="sd"> *</span></div><div class='line' id='LC212'><span class="sd"> * @param string $regexpPattern Preg_match pattern (Defaults to: .*)</span></div><div class='line' id='LC213'><span class="sd"> * @param boolean $sort Whether results should be sorted.</span></div><div class='line' id='LC214'><span class="sd"> * @return array Files that match given pattern</span></div><div class='line' id='LC215'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::find</span></div><div class='line' id='LC216'><span class="sd"> */</span></div><div class='line' id='LC217'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">find</span><span class="p">(</span><span class="nv">$regexpPattern</span> <span class="o">=</span> <span class="s1">&#39;.*&#39;</span><span class="p">,</span> <span class="nv">$sort</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC218'>		<span class="k">list</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">,</span> <span class="nv">$files</span><span class="p">)</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">read</span><span class="p">(</span><span class="nv">$sort</span><span class="p">);</span></div><div class='line' id='LC219'>		<span class="k">return</span> <span class="nb">array_values</span><span class="p">(</span><span class="nb">preg_grep</span><span class="p">(</span><span class="s1">&#39;/^&#39;</span> <span class="o">.</span> <span class="nv">$regexpPattern</span> <span class="o">.</span> <span class="s1">&#39;$/i&#39;</span><span class="p">,</span> <span class="nv">$files</span><span class="p">));</span> <span class="p">;</span></div><div class='line' id='LC220'>	<span class="p">}</span></div><div class='line' id='LC221'><br/></div><div class='line' id='LC222'><span class="sd">/**</span></div><div class='line' id='LC223'><span class="sd"> * Returns an array of all matching files in and below current directory.</span></div><div class='line' id='LC224'><span class="sd"> *</span></div><div class='line' id='LC225'><span class="sd"> * @param string $pattern Preg_match pattern (Defaults to: .*)</span></div><div class='line' id='LC226'><span class="sd"> * @param boolean $sort Whether results should be sorted.</span></div><div class='line' id='LC227'><span class="sd"> * @return array Files matching $pattern</span></div><div class='line' id='LC228'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::findRecursive</span></div><div class='line' id='LC229'><span class="sd"> */</span></div><div class='line' id='LC230'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">findRecursive</span><span class="p">(</span><span class="nv">$pattern</span> <span class="o">=</span> <span class="s1">&#39;.*&#39;</span><span class="p">,</span> <span class="nv">$sort</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC231'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pwd</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC232'>			<span class="k">return</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC233'>		<span class="p">}</span></div><div class='line' id='LC234'>		<span class="nv">$startsOn</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">;</span></div><div class='line' id='LC235'>		<span class="nv">$out</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_findRecursive</span><span class="p">(</span><span class="nv">$pattern</span><span class="p">,</span> <span class="nv">$sort</span><span class="p">);</span></div><div class='line' id='LC236'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cd</span><span class="p">(</span><span class="nv">$startsOn</span><span class="p">);</span></div><div class='line' id='LC237'>		<span class="k">return</span> <span class="nv">$out</span><span class="p">;</span></div><div class='line' id='LC238'>	<span class="p">}</span></div><div class='line' id='LC239'><br/></div><div class='line' id='LC240'><span class="sd">/**</span></div><div class='line' id='LC241'><span class="sd"> * Private helper function for findRecursive.</span></div><div class='line' id='LC242'><span class="sd"> *</span></div><div class='line' id='LC243'><span class="sd"> * @param string $pattern Pattern to match against</span></div><div class='line' id='LC244'><span class="sd"> * @param boolean $sort Whether results should be sorted.</span></div><div class='line' id='LC245'><span class="sd"> * @return array Files matching pattern</span></div><div class='line' id='LC246'><span class="sd"> */</span></div><div class='line' id='LC247'>	<span class="k">protected</span> <span class="k">function</span> <span class="nf">_findRecursive</span><span class="p">(</span><span class="nv">$pattern</span><span class="p">,</span> <span class="nv">$sort</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC248'>		<span class="k">list</span><span class="p">(</span><span class="nv">$dirs</span><span class="p">,</span> <span class="nv">$files</span><span class="p">)</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">read</span><span class="p">(</span><span class="nv">$sort</span><span class="p">);</span></div><div class='line' id='LC249'>		<span class="nv">$found</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC250'><br/></div><div class='line' id='LC251'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$files</span> <span class="k">as</span> <span class="nv">$file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC252'>			<span class="k">if</span> <span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^&#39;</span> <span class="o">.</span> <span class="nv">$pattern</span> <span class="o">.</span> <span class="s1">&#39;$/i&#39;</span><span class="p">,</span> <span class="nv">$file</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC253'>				<span class="nv">$found</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">addPathElement</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">,</span> <span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC254'>			<span class="p">}</span></div><div class='line' id='LC255'>		<span class="p">}</span></div><div class='line' id='LC256'>		<span class="nv">$start</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">;</span></div><div class='line' id='LC257'><br/></div><div class='line' id='LC258'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$dirs</span> <span class="k">as</span> <span class="nv">$dir</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC259'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cd</span><span class="p">(</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">addPathElement</span><span class="p">(</span><span class="nv">$start</span><span class="p">,</span> <span class="nv">$dir</span><span class="p">));</span></div><div class='line' id='LC260'>			<span class="nv">$found</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$found</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">findRecursive</span><span class="p">(</span><span class="nv">$pattern</span><span class="p">,</span> <span class="nv">$sort</span><span class="p">));</span></div><div class='line' id='LC261'>		<span class="p">}</span></div><div class='line' id='LC262'>		<span class="k">return</span> <span class="nv">$found</span><span class="p">;</span></div><div class='line' id='LC263'>	<span class="p">}</span></div><div class='line' id='LC264'><br/></div><div class='line' id='LC265'><span class="sd">/**</span></div><div class='line' id='LC266'><span class="sd"> * Returns true if given $path is a Windows path.</span></div><div class='line' id='LC267'><span class="sd"> *</span></div><div class='line' id='LC268'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC269'><span class="sd"> * @return boolean true if windows path, false otherwise</span></div><div class='line' id='LC270'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::isWindowsPath</span></div><div class='line' id='LC271'><span class="sd"> */</span></div><div class='line' id='LC272'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isWindowsPath</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC273'>		<span class="k">return</span> <span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^[A-Z]:\\\\/i&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">)</span> <span class="o">||</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="o">==</span> <span class="s1">&#39;\\\\&#39;</span><span class="p">);</span></div><div class='line' id='LC274'>	<span class="p">}</span></div><div class='line' id='LC275'><br/></div><div class='line' id='LC276'><span class="sd">/**</span></div><div class='line' id='LC277'><span class="sd"> * Returns true if given $path is an absolute path.</span></div><div class='line' id='LC278'><span class="sd"> *</span></div><div class='line' id='LC279'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC280'><span class="sd"> * @return boolean true if path is absolute.</span></div><div class='line' id='LC281'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::isAbsolute</span></div><div class='line' id='LC282'><span class="sd"> */</span></div><div class='line' id='LC283'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isAbsolute</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC284'>		<span class="k">return</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nv">$path</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">===</span> <span class="s1">&#39;/&#39;</span> <span class="o">||</span> <span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^[A-Z]:\\\\/i&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">)</span> <span class="o">||</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="o">==</span> <span class="s1">&#39;\\\\&#39;</span><span class="p">);</span></div><div class='line' id='LC285'>	<span class="p">}</span></div><div class='line' id='LC286'><br/></div><div class='line' id='LC287'><span class="sd">/**</span></div><div class='line' id='LC288'><span class="sd"> * Returns a correct set of slashes for given $path. (\\ for Windows paths and / for other paths.)</span></div><div class='line' id='LC289'><span class="sd"> *</span></div><div class='line' id='LC290'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC291'><span class="sd"> * @return string Set of slashes (&quot;\\&quot; or &quot;/&quot;)</span></div><div class='line' id='LC292'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::normalizePath</span></div><div class='line' id='LC293'><span class="sd"> */</span></div><div class='line' id='LC294'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">normalizePath</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC295'>		<span class="k">return</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">correctSlashFor</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC296'>	<span class="p">}</span></div><div class='line' id='LC297'><br/></div><div class='line' id='LC298'><span class="sd">/**</span></div><div class='line' id='LC299'><span class="sd"> * Returns a correct set of slashes for given $path. (\\ for Windows paths and / for other paths.)</span></div><div class='line' id='LC300'><span class="sd"> *</span></div><div class='line' id='LC301'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC302'><span class="sd"> * @return string Set of slashes (&quot;\\&quot; or &quot;/&quot;)</span></div><div class='line' id='LC303'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::correctSlashFor</span></div><div class='line' id='LC304'><span class="sd"> */</span></div><div class='line' id='LC305'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">correctSlashFor</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC306'>		<span class="k">return</span> <span class="p">(</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">isWindowsPath</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="o">?</span> <span class="s1">&#39;\\&#39;</span> <span class="o">:</span> <span class="s1">&#39;/&#39;</span><span class="p">;</span></div><div class='line' id='LC307'>	<span class="p">}</span></div><div class='line' id='LC308'><br/></div><div class='line' id='LC309'><span class="sd">/**</span></div><div class='line' id='LC310'><span class="sd"> * Returns $path with added terminating slash (corrected for Windows or other OS).</span></div><div class='line' id='LC311'><span class="sd"> *</span></div><div class='line' id='LC312'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC313'><span class="sd"> * @return string Path with ending slash</span></div><div class='line' id='LC314'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::slashTerm</span></div><div class='line' id='LC315'><span class="sd"> */</span></div><div class='line' id='LC316'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">slashTerm</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC317'>		<span class="k">if</span> <span class="p">(</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">isSlashTerm</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC318'>			<span class="k">return</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC319'>		<span class="p">}</span></div><div class='line' id='LC320'>		<span class="k">return</span> <span class="nv">$path</span> <span class="o">.</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">correctSlashFor</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC321'>	<span class="p">}</span></div><div class='line' id='LC322'><br/></div><div class='line' id='LC323'><span class="sd">/**</span></div><div class='line' id='LC324'><span class="sd"> * Returns $path with $element added, with correct slash in-between.</span></div><div class='line' id='LC325'><span class="sd"> *</span></div><div class='line' id='LC326'><span class="sd"> * @param string $path Path</span></div><div class='line' id='LC327'><span class="sd"> * @param string $element Element to and at end of path</span></div><div class='line' id='LC328'><span class="sd"> * @return string Combined path</span></div><div class='line' id='LC329'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::addPathElement</span></div><div class='line' id='LC330'><span class="sd"> */</span></div><div class='line' id='LC331'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">addPathElement</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$element</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC332'>		<span class="k">return</span> <span class="nb">rtrim</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nx">DS</span><span class="p">)</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="nv">$element</span><span class="p">;</span></div><div class='line' id='LC333'>	<span class="p">}</span></div><div class='line' id='LC334'><br/></div><div class='line' id='LC335'><span class="sd">/**</span></div><div class='line' id='LC336'><span class="sd"> * Returns true if the File is in a given CakePath.</span></div><div class='line' id='LC337'><span class="sd"> *</span></div><div class='line' id='LC338'><span class="sd"> * @param string $path The path to check.</span></div><div class='line' id='LC339'><span class="sd"> * @return boolean</span></div><div class='line' id='LC340'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::inCakePath</span></div><div class='line' id='LC341'><span class="sd"> */</span></div><div class='line' id='LC342'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">inCakePath</span><span class="p">(</span><span class="nv">$path</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC343'>		<span class="nv">$dir</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nx">ROOT</span><span class="p">),</span> <span class="mi">0</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC344'>		<span class="nv">$newdir</span> <span class="o">=</span> <span class="nv">$dir</span> <span class="o">.</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC345'><br/></div><div class='line' id='LC346'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">inPath</span><span class="p">(</span><span class="nv">$newdir</span><span class="p">);</span></div><div class='line' id='LC347'>	<span class="p">}</span></div><div class='line' id='LC348'><br/></div><div class='line' id='LC349'><span class="sd">/**</span></div><div class='line' id='LC350'><span class="sd"> * Returns true if the File is in given path.</span></div><div class='line' id='LC351'><span class="sd"> *</span></div><div class='line' id='LC352'><span class="sd"> * @param string $path The path to check that the current pwd() resides with in.</span></div><div class='line' id='LC353'><span class="sd"> * @param boolean $reverse</span></div><div class='line' id='LC354'><span class="sd"> * @return boolean</span></div><div class='line' id='LC355'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::inPath</span></div><div class='line' id='LC356'><span class="sd"> */</span></div><div class='line' id='LC357'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">inPath</span><span class="p">(</span><span class="nv">$path</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$reverse</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC358'>		<span class="nv">$dir</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC359'>		<span class="nv">$current</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pwd</span><span class="p">());</span></div><div class='line' id='LC360'><br/></div><div class='line' id='LC361'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$reverse</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC362'>			<span class="nv">$return</span> <span class="o">=</span> <span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(.*)&#39;</span> <span class="o">.</span> <span class="nb">preg_quote</span><span class="p">(</span><span class="nv">$dir</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;(.*)/&#39;</span><span class="p">,</span> <span class="nv">$current</span><span class="p">);</span></div><div class='line' id='LC363'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC364'>			<span class="nv">$return</span> <span class="o">=</span> <span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^(.*)&#39;</span> <span class="o">.</span> <span class="nb">preg_quote</span><span class="p">(</span><span class="nv">$current</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;(.*)/&#39;</span><span class="p">,</span> <span class="nv">$dir</span><span class="p">);</span></div><div class='line' id='LC365'>		<span class="p">}</span></div><div class='line' id='LC366'>		<span class="k">return</span> <span class="p">(</span><span class="nx">bool</span><span class="p">)</span><span class="nv">$return</span><span class="p">;</span></div><div class='line' id='LC367'>	<span class="p">}</span></div><div class='line' id='LC368'><br/></div><div class='line' id='LC369'><span class="sd">/**</span></div><div class='line' id='LC370'><span class="sd"> * Change the mode on a directory structure recursively. This includes changing the mode on files as well.</span></div><div class='line' id='LC371'><span class="sd"> *</span></div><div class='line' id='LC372'><span class="sd"> * @param string $path The path to chmod</span></div><div class='line' id='LC373'><span class="sd"> * @param integer $mode octal value 0755</span></div><div class='line' id='LC374'><span class="sd"> * @param boolean $recursive chmod recursively, set to false to only change the current directory.</span></div><div class='line' id='LC375'><span class="sd"> * @param array $exceptions array of files, directories to skip</span></div><div class='line' id='LC376'><span class="sd"> * @return boolean Returns TRUE on success, FALSE on failure</span></div><div class='line' id='LC377'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::chmod</span></div><div class='line' id='LC378'><span class="sd"> */</span></div><div class='line' id='LC379'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">chmod</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$mode</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$recursive</span> <span class="o">=</span> <span class="k">true</span><span class="p">,</span> <span class="nv">$exceptions</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC380'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$mode</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC381'>			<span class="nv">$mode</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">;</span></div><div class='line' id='LC382'>		<span class="p">}</span></div><div class='line' id='LC383'><br/></div><div class='line' id='LC384'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$recursive</span> <span class="o">===</span> <span class="k">false</span> <span class="o">&amp;&amp;</span> <span class="nb">is_dir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC385'>			<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">chmod</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nb">intval</span><span class="p">(</span><span class="nv">$mode</span><span class="p">,</span> <span class="mi">8</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC386'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s changed to %s&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC387'>				<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC388'>			<span class="p">}</span></div><div class='line' id='LC389'><br/></div><div class='line' id='LC390'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT changed to %s&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC391'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC392'>		<span class="p">}</span></div><div class='line' id='LC393'><br/></div><div class='line' id='LC394'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC395'>			<span class="nv">$paths</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tree</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC396'><br/></div><div class='line' id='LC397'>			<span class="k">foreach</span> <span class="p">(</span><span class="nv">$paths</span> <span class="k">as</span> <span class="nv">$type</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC398'>				<span class="k">foreach</span> <span class="p">(</span><span class="nv">$type</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$fullpath</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC399'>					<span class="nv">$check</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="nx">DS</span><span class="p">,</span> <span class="nv">$fullpath</span><span class="p">);</span></div><div class='line' id='LC400'>					<span class="nv">$count</span> <span class="o">=</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$check</span><span class="p">);</span></div><div class='line' id='LC401'><br/></div><div class='line' id='LC402'>					<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$check</span><span class="p">[</span><span class="nv">$count</span> <span class="o">-</span> <span class="mi">1</span><span class="p">],</span> <span class="nv">$exceptions</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC403'>						<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC404'>					<span class="p">}</span></div><div class='line' id='LC405'><br/></div><div class='line' id='LC406'>					<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">chmod</span><span class="p">(</span><span class="nv">$fullpath</span><span class="p">,</span> <span class="nb">intval</span><span class="p">(</span><span class="nv">$mode</span><span class="p">,</span> <span class="mi">8</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC407'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s changed to %s&#39;</span><span class="p">,</span> <span class="nv">$fullpath</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC408'>					<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC409'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT changed to %s&#39;</span><span class="p">,</span> <span class="nv">$fullpath</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC410'>					<span class="p">}</span></div><div class='line' id='LC411'>				<span class="p">}</span></div><div class='line' id='LC412'>			<span class="p">}</span></div><div class='line' id='LC413'><br/></div><div class='line' id='LC414'>			<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC415'>				<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC416'>			<span class="p">}</span></div><div class='line' id='LC417'>		<span class="p">}</span></div><div class='line' id='LC418'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC419'>	<span class="p">}</span></div><div class='line' id='LC420'><br/></div><div class='line' id='LC421'><span class="sd">/**</span></div><div class='line' id='LC422'><span class="sd"> * Returns an array of nested directories and files in each directory</span></div><div class='line' id='LC423'><span class="sd"> *</span></div><div class='line' id='LC424'><span class="sd"> * @param string $path the directory path to build the tree from</span></div><div class='line' id='LC425'><span class="sd"> * @param mixed $exceptions Either an array of files/folder to exclude</span></div><div class='line' id='LC426'><span class="sd"> *   or boolean true to not grab dot files/folders</span></div><div class='line' id='LC427'><span class="sd"> * @param string $type either &#39;file&#39; or &#39;dir&#39;. null returns both files and directories</span></div><div class='line' id='LC428'><span class="sd"> * @return mixed array of nested directories and files in each directory</span></div><div class='line' id='LC429'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::tree</span></div><div class='line' id='LC430'><span class="sd"> */</span></div><div class='line' id='LC431'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">tree</span><span class="p">(</span><span class="nv">$path</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$exceptions</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC432'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$path</span> <span class="o">==</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC433'>			<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">;</span></div><div class='line' id='LC434'>		<span class="p">}</span></div><div class='line' id='LC435'>		<span class="nv">$files</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC436'>		<span class="nv">$directories</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC437'><br/></div><div class='line' id='LC438'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC439'>			<span class="nv">$exceptions</span> <span class="o">=</span> <span class="nb">array_flip</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">);</span></div><div class='line' id='LC440'>		<span class="p">}</span></div><div class='line' id='LC441'>		<span class="nv">$skipHidden</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC442'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$exceptions</span> <span class="o">===</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC443'>			<span class="nv">$skipHidden</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC444'>		<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">[</span><span class="s1">&#39;.&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC445'>			<span class="nv">$skipHidden</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC446'>			<span class="nb">unset</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">[</span><span class="s1">&#39;.&#39;</span><span class="p">]);</span></div><div class='line' id='LC447'>		<span class="p">}</span></div><div class='line' id='LC448'><br/></div><div class='line' id='LC449'>		<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC450'>			<span class="nv">$directory</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">RecursiveDirectoryIterator</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nx">RecursiveDirectoryIterator</span><span class="o">::</span><span class="na">KEY_AS_PATHNAME</span> <span class="o">|</span> <span class="nx">RecursiveDirectoryIterator</span><span class="o">::</span><span class="na">CURRENT_AS_SELF</span><span class="p">);</span></div><div class='line' id='LC451'>			<span class="nv">$iterator</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">RecursiveIteratorIterator</span><span class="p">(</span><span class="nv">$directory</span><span class="p">,</span> <span class="nx">RecursiveIteratorIterator</span><span class="o">::</span><span class="na">SELF_FIRST</span><span class="p">);</span></div><div class='line' id='LC452'>		<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC453'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC454'>				<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="k">array</span><span class="p">(),</span> <span class="k">array</span><span class="p">());</span></div><div class='line' id='LC455'>			<span class="p">}</span></div><div class='line' id='LC456'>			<span class="k">return</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC457'>		<span class="p">}</span></div><div class='line' id='LC458'><br/></div><div class='line' id='LC459'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$iterator</span> <span class="k">as</span> <span class="nv">$itemPath</span> <span class="o">=&gt;</span> <span class="nv">$fsIterator</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC460'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$skipHidden</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC461'>				<span class="nv">$subPathName</span> <span class="o">=</span> <span class="nv">$fsIterator</span><span class="o">-&gt;</span><span class="na">getSubPathname</span><span class="p">();</span></div><div class='line' id='LC462'>				<span class="k">if</span> <span class="p">(</span><span class="nv">$subPathName</span><span class="p">{</span><span class="mi">0</span><span class="p">}</span> <span class="o">==</span> <span class="s1">&#39;.&#39;</span> <span class="o">||</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$subPathName</span><span class="p">,</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;.&#39;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC463'>					<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC464'>				<span class="p">}</span></div><div class='line' id='LC465'>			<span class="p">}</span></div><div class='line' id='LC466'>			<span class="nv">$item</span> <span class="o">=</span> <span class="nv">$fsIterator</span><span class="o">-&gt;</span><span class="na">current</span><span class="p">();</span></div><div class='line' id='LC467'>			<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$exceptions</span><span class="p">[</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">getFilename</span><span class="p">()]))</span> <span class="p">{</span></div><div class='line' id='LC468'>				<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC469'>			<span class="p">}</span></div><div class='line' id='LC470'><br/></div><div class='line' id='LC471'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isFile</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC472'>				<span class="nv">$files</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$itemPath</span><span class="p">;</span></div><div class='line' id='LC473'>			<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDir</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDot</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC474'>				<span class="nv">$directories</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$itemPath</span><span class="p">;</span></div><div class='line' id='LC475'>			<span class="p">}</span></div><div class='line' id='LC476'>		<span class="p">}</span></div><div class='line' id='LC477'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC478'>			<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nv">$directories</span><span class="p">,</span> <span class="nv">$files</span><span class="p">);</span></div><div class='line' id='LC479'>		<span class="p">}</span></div><div class='line' id='LC480'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$type</span> <span class="o">===</span> <span class="s1">&#39;dir&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC481'>			<span class="k">return</span> <span class="nv">$directories</span><span class="p">;</span></div><div class='line' id='LC482'>		<span class="p">}</span></div><div class='line' id='LC483'>		<span class="k">return</span> <span class="nv">$files</span><span class="p">;</span></div><div class='line' id='LC484'>	<span class="p">}</span></div><div class='line' id='LC485'><br/></div><div class='line' id='LC486'><span class="sd">/**</span></div><div class='line' id='LC487'><span class="sd"> * Create a directory structure recursively. Can be used to create</span></div><div class='line' id='LC488'><span class="sd"> * deep path structures like `/foo/bar/baz/shoe/horn`</span></div><div class='line' id='LC489'><span class="sd"> *</span></div><div class='line' id='LC490'><span class="sd"> * @param string $pathname The directory structure to create</span></div><div class='line' id='LC491'><span class="sd"> * @param integer $mode octal value 0755</span></div><div class='line' id='LC492'><span class="sd"> * @return boolean Returns TRUE on success, FALSE on failure</span></div><div class='line' id='LC493'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::create</span></div><div class='line' id='LC494'><span class="sd"> */</span></div><div class='line' id='LC495'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">create</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">,</span> <span class="nv">$mode</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC496'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">)</span> <span class="o">||</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC497'>			<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC498'>		<span class="p">}</span></div><div class='line' id='LC499'><br/></div><div class='line' id='LC500'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$mode</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC501'>			<span class="nv">$mode</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">;</span></div><div class='line' id='LC502'>		<span class="p">}</span></div><div class='line' id='LC503'><br/></div><div class='line' id='LC504'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC505'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s is a file&#39;</span><span class="p">,</span> <span class="nv">$pathname</span><span class="p">);</span></div><div class='line' id='LC506'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC507'>		<span class="p">}</span></div><div class='line' id='LC508'>		<span class="nv">$pathname</span> <span class="o">=</span> <span class="nb">rtrim</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">,</span> <span class="nx">DS</span><span class="p">);</span></div><div class='line' id='LC509'>		<span class="nv">$nextPathname</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nb">strrpos</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">,</span> <span class="nx">DS</span><span class="p">));</span></div><div class='line' id='LC510'><br/></div><div class='line' id='LC511'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$nextPathname</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC512'>			<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC513'>				<span class="nv">$old</span> <span class="o">=</span> <span class="nb">umask</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC514'>				<span class="k">if</span> <span class="p">(</span><span class="nb">mkdir</span><span class="p">(</span><span class="nv">$pathname</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC515'>					<span class="nb">umask</span><span class="p">(</span><span class="nv">$old</span><span class="p">);</span></div><div class='line' id='LC516'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s created&#39;</span><span class="p">,</span> <span class="nv">$pathname</span><span class="p">);</span></div><div class='line' id='LC517'>					<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC518'>				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC519'>					<span class="nb">umask</span><span class="p">(</span><span class="nv">$old</span><span class="p">);</span></div><div class='line' id='LC520'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT created&#39;</span><span class="p">,</span> <span class="nv">$pathname</span><span class="p">);</span></div><div class='line' id='LC521'>					<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC522'>				<span class="p">}</span></div><div class='line' id='LC523'>			<span class="p">}</span></div><div class='line' id='LC524'>		<span class="p">}</span></div><div class='line' id='LC525'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC526'>	<span class="p">}</span></div><div class='line' id='LC527'><br/></div><div class='line' id='LC528'><span class="sd">/**</span></div><div class='line' id='LC529'><span class="sd"> * Returns the size in bytes of this Folder and its contents.</span></div><div class='line' id='LC530'><span class="sd"> *</span></div><div class='line' id='LC531'><span class="sd"> * @return integer size in bytes of current folder</span></div><div class='line' id='LC532'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::dirsize</span></div><div class='line' id='LC533'><span class="sd"> */</span></div><div class='line' id='LC534'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">dirsize</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC535'>		<span class="nv">$size</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC536'>		<span class="nv">$directory</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">);</span></div><div class='line' id='LC537'>		<span class="nv">$stack</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$directory</span><span class="p">);</span></div><div class='line' id='LC538'>		<span class="nv">$count</span> <span class="o">=</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$stack</span><span class="p">);</span></div><div class='line' id='LC539'>		<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$j</span> <span class="o">=</span> <span class="nv">$count</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nv">$j</span><span class="p">;</span> <span class="o">++</span><span class="nv">$i</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC540'>			<span class="k">if</span> <span class="p">(</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC541'>				<span class="nv">$size</span> <span class="o">+=</span> <span class="nb">filesize</span><span class="p">(</span><span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC542'>			<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC543'>				<span class="nv">$dir</span> <span class="o">=</span> <span class="nx">dir</span><span class="p">(</span><span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC544'>				<span class="k">if</span> <span class="p">(</span><span class="nv">$dir</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC545'>					<span class="k">while</span> <span class="p">(</span><span class="k">false</span> <span class="o">!==</span> <span class="p">(</span><span class="nv">$entry</span> <span class="o">=</span> <span class="nv">$dir</span><span class="o">-&gt;</span><span class="na">read</span><span class="p">()))</span> <span class="p">{</span></div><div class='line' id='LC546'>						<span class="k">if</span> <span class="p">(</span><span class="nv">$entry</span> <span class="o">===</span> <span class="s1">&#39;.&#39;</span> <span class="o">||</span> <span class="nv">$entry</span> <span class="o">===</span> <span class="s1">&#39;..&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC547'>							<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC548'>						<span class="p">}</span></div><div class='line' id='LC549'>						<span class="nv">$add</span> <span class="o">=</span> <span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$entry</span><span class="p">;</span></div><div class='line' id='LC550'><br/></div><div class='line' id='LC551'>						<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$stack</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$entry</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC552'>							<span class="nv">$add</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$add</span><span class="p">);</span></div><div class='line' id='LC553'>						<span class="p">}</span></div><div class='line' id='LC554'>						<span class="nv">$stack</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$add</span><span class="p">;</span></div><div class='line' id='LC555'>					<span class="p">}</span></div><div class='line' id='LC556'>					<span class="nv">$dir</span><span class="o">-&gt;</span><span class="na">close</span><span class="p">();</span></div><div class='line' id='LC557'>				<span class="p">}</span></div><div class='line' id='LC558'>			<span class="p">}</span></div><div class='line' id='LC559'>			<span class="nv">$j</span> <span class="o">=</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$stack</span><span class="p">);</span></div><div class='line' id='LC560'>		<span class="p">}</span></div><div class='line' id='LC561'>		<span class="k">return</span> <span class="nv">$size</span><span class="p">;</span></div><div class='line' id='LC562'>	<span class="p">}</span></div><div class='line' id='LC563'><br/></div><div class='line' id='LC564'><span class="sd">/**</span></div><div class='line' id='LC565'><span class="sd"> * Recursively Remove directories if the system allows.</span></div><div class='line' id='LC566'><span class="sd"> *</span></div><div class='line' id='LC567'><span class="sd"> * @param string $path Path of directory to delete</span></div><div class='line' id='LC568'><span class="sd"> * @return boolean Success</span></div><div class='line' id='LC569'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::delete</span></div><div class='line' id='LC570'><span class="sd"> */</span></div><div class='line' id='LC571'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">delete</span><span class="p">(</span><span class="nv">$path</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC572'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC573'>			<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pwd</span><span class="p">();</span></div><div class='line' id='LC574'>		<span class="p">}</span></div><div class='line' id='LC575'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC576'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC577'>		<span class="p">}</span></div><div class='line' id='LC578'>		<span class="nv">$path</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC579'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC580'>			<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC581'>				<span class="nv">$directory</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">RecursiveDirectoryIterator</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nx">RecursiveDirectoryIterator</span><span class="o">::</span><span class="na">CURRENT_AS_SELF</span><span class="p">);</span></div><div class='line' id='LC582'>				<span class="nv">$iterator</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">RecursiveIteratorIterator</span><span class="p">(</span><span class="nv">$directory</span><span class="p">,</span> <span class="nx">RecursiveIteratorIterator</span><span class="o">::</span><span class="na">CHILD_FIRST</span><span class="p">);</span></div><div class='line' id='LC583'>			<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC584'>				<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC585'>			<span class="p">}</span></div><div class='line' id='LC586'><br/></div><div class='line' id='LC587'>			<span class="k">foreach</span> <span class="p">(</span><span class="nv">$iterator</span> <span class="k">as</span> <span class="nv">$item</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC588'>				<span class="nv">$filePath</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">getPathname</span><span class="p">();</span></div><div class='line' id='LC589'>				<span class="k">if</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isFile</span><span class="p">()</span> <span class="o">||</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isLink</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC590'>					<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">unlink</span><span class="p">(</span><span class="nv">$filePath</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC591'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s removed&#39;</span><span class="p">,</span> <span class="nv">$filePath</span><span class="p">);</span></div><div class='line' id='LC592'>					<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC593'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT removed&#39;</span><span class="p">,</span> <span class="nv">$filePath</span><span class="p">);</span></div><div class='line' id='LC594'>					<span class="p">}</span></div><div class='line' id='LC595'>				<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDir</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nv">$item</span><span class="o">-&gt;</span><span class="na">isDot</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC596'>					<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">rmdir</span><span class="p">(</span><span class="nv">$filePath</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC597'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s removed&#39;</span><span class="p">,</span> <span class="nv">$filePath</span><span class="p">);</span></div><div class='line' id='LC598'>					<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC599'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT removed&#39;</span><span class="p">,</span> <span class="nv">$filePath</span><span class="p">);</span></div><div class='line' id='LC600'>						<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC601'>					<span class="p">}</span></div><div class='line' id='LC602'>				<span class="p">}</span></div><div class='line' id='LC603'>			<span class="p">}</span></div><div class='line' id='LC604'><br/></div><div class='line' id='LC605'>			<span class="nv">$path</span> <span class="o">=</span> <span class="nb">rtrim</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nx">DS</span><span class="p">);</span></div><div class='line' id='LC606'>			<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">rmdir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC607'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s removed&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC608'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC609'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT removed&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC610'>				<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC611'>			<span class="p">}</span></div><div class='line' id='LC612'>		<span class="p">}</span></div><div class='line' id='LC613'>		<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC614'>	<span class="p">}</span></div><div class='line' id='LC615'><br/></div><div class='line' id='LC616'><span class="sd">/**</span></div><div class='line' id='LC617'><span class="sd"> * Recursive directory copy.</span></div><div class='line' id='LC618'><span class="sd"> *</span></div><div class='line' id='LC619'><span class="sd"> * ### Options</span></div><div class='line' id='LC620'><span class="sd"> *</span></div><div class='line' id='LC621'><span class="sd"> * - `to` The directory to copy to.</span></div><div class='line' id='LC622'><span class="sd"> * - `from` The directory to copy from, this will cause a cd() to occur, changing the results of pwd().</span></div><div class='line' id='LC623'><span class="sd"> * - `mode` The mode to copy the files/directories with.</span></div><div class='line' id='LC624'><span class="sd"> * - `skip` Files/directories to skip.</span></div><div class='line' id='LC625'><span class="sd"> * - `schema` FolderExt::MERGE, FolderExt::OVERWRITE, FolderExt::SKIP</span></div><div class='line' id='LC626'><span class="sd"> *</span></div><div class='line' id='LC627'><span class="sd"> * @param mixed $options Either an array of options (see above) or a string of the destination directory.</span></div><div class='line' id='LC628'><span class="sd"> * @return boolean Success</span></div><div class='line' id='LC629'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::copy</span></div><div class='line' id='LC630'><span class="sd"> */</span></div><div class='line' id='LC631'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">copy</span><span class="p">(</span><span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC632'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pwd</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC633'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC634'>		<span class="p">}</span></div><div class='line' id='LC635'>		<span class="nv">$to</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC636'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$options</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC637'>			<span class="nv">$to</span> <span class="o">=</span> <span class="nv">$options</span><span class="p">;</span></div><div class='line' id='LC638'>			<span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC639'>		<span class="p">}</span></div><div class='line' id='LC640'>		<span class="nv">$options</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;to&#39;</span> <span class="o">=&gt;</span> <span class="nv">$to</span><span class="p">,</span> <span class="s1">&#39;from&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">,</span> <span class="s1">&#39;mode&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">,</span> <span class="s1">&#39;skip&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(),</span> <span class="s1">&#39;scheme&#39;</span><span class="o">=&gt;</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">MERGE</span><span class="p">),</span> <span class="nv">$options</span><span class="p">);</span></div><div class='line' id='LC641'><br/></div><div class='line' id='LC642'>		<span class="nv">$fromDir</span> <span class="o">=</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">];</span></div><div class='line' id='LC643'>		<span class="nv">$toDir</span> <span class="o">=</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">];</span></div><div class='line' id='LC644'>		<span class="nv">$mode</span> <span class="o">=</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;mode&#39;</span><span class="p">];</span></div><div class='line' id='LC645'><br/></div><div class='line' id='LC646'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cd</span><span class="p">(</span><span class="nv">$fromDir</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC647'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s not found&#39;</span><span class="p">,</span> <span class="nv">$fromDir</span><span class="p">);</span></div><div class='line' id='LC648'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC649'>		<span class="p">}</span></div><div class='line' id='LC650'><br/></div><div class='line' id='LC651'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$toDir</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC652'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$toDir</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC653'>		<span class="p">}</span></div><div class='line' id='LC654'><br/></div><div class='line' id='LC655'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_writable</span><span class="p">(</span><span class="nv">$toDir</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC656'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s not writable&#39;</span><span class="p">,</span> <span class="nv">$toDir</span><span class="p">);</span></div><div class='line' id='LC657'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC658'>		<span class="p">}</span></div><div class='line' id='LC659'><br/></div><div class='line' id='LC660'>		<span class="nv">$exceptions</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="s1">&#39;..&#39;</span><span class="p">,</span> <span class="s1">&#39;.svn&#39;</span><span class="p">),</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;skip&#39;</span><span class="p">]);</span></div><div class='line' id='LC661'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$handle</span> <span class="o">=</span> <span class="o">@</span><span class="nb">opendir</span><span class="p">(</span><span class="nv">$fromDir</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC662'>			<span class="k">while</span> <span class="p">((</span><span class="nv">$item</span> <span class="o">=</span> <span class="nb">readdir</span><span class="p">(</span><span class="nv">$handle</span><span class="p">))</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC663'>				<span class="nv">$to</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">addPathElement</span><span class="p">(</span><span class="nv">$toDir</span><span class="p">,</span> <span class="nv">$item</span><span class="p">);</span></div><div class='line' id='LC664'>				<span class="k">if</span> <span class="p">((</span><span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;scheme&#39;</span><span class="p">]</span> <span class="o">!=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">SKIP</span> <span class="o">||</span> <span class="o">!</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$to</span><span class="p">))</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$item</span><span class="p">,</span> <span class="nv">$exceptions</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC665'>					<span class="nv">$from</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">addPathElement</span><span class="p">(</span><span class="nv">$fromDir</span><span class="p">,</span> <span class="nv">$item</span><span class="p">);</span>				</div><div class='line' id='LC666'>					<span class="k">if</span> <span class="p">(</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$from</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC667'>						<span class="k">if</span> <span class="p">(</span><span class="nb">copy</span><span class="p">(</span><span class="nv">$from</span><span class="p">,</span> <span class="nv">$to</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC668'>							<span class="nb">chmod</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nb">intval</span><span class="p">(</span><span class="nv">$mode</span><span class="p">,</span> <span class="mi">8</span><span class="p">));</span></div><div class='line' id='LC669'>							<span class="nb">touch</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nb">filemtime</span><span class="p">(</span><span class="nv">$from</span><span class="p">));</span></div><div class='line' id='LC670'>							<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s copied to %s&#39;</span><span class="p">,</span> <span class="nv">$from</span><span class="p">,</span> <span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC671'>						<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC672'>							<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s NOT copied to %s&#39;</span><span class="p">,</span> <span class="nv">$from</span><span class="p">,</span> <span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC673'>						<span class="p">}</span></div><div class='line' id='LC674'>					<span class="p">}</span></div><div class='line' id='LC675'><br/></div><div class='line' id='LC676'>					<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">file_exists</span><span class="p">(</span><span class="nv">$to</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;scheme&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">OVERWRITE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC677'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">delete</span><span class="p">(</span><span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC678'>					<span class="p">}</span></div><div class='line' id='LC679'><br/></div><div class='line' id='LC680'>					<span class="k">if</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$to</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC681'>						<span class="nv">$old</span> <span class="o">=</span> <span class="nb">umask</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC682'>						<span class="k">if</span> <span class="p">(</span><span class="nb">mkdir</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC683'>							<span class="nb">umask</span><span class="p">(</span><span class="nv">$old</span><span class="p">);</span></div><div class='line' id='LC684'>							<span class="nv">$old</span> <span class="o">=</span> <span class="nb">umask</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC685'>							<span class="nb">chmod</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span> <span class="nv">$mode</span><span class="p">);</span></div><div class='line' id='LC686'>							<span class="nb">umask</span><span class="p">(</span><span class="nv">$old</span><span class="p">);</span></div><div class='line' id='LC687'>							<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s created&#39;</span><span class="p">,</span> <span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC688'>							<span class="nv">$options</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$options</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;to&#39;</span><span class="o">=&gt;</span> <span class="nv">$to</span><span class="p">,</span> <span class="s1">&#39;from&#39;</span><span class="o">=&gt;</span> <span class="nv">$from</span><span class="p">));</span></div><div class='line' id='LC689'>							<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">copy</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></div><div class='line' id='LC690'>						<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC691'>							<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">__d</span><span class="p">(</span><span class="s1">&#39;cake_dev&#39;</span><span class="p">,</span> <span class="s1">&#39;%s not created&#39;</span><span class="p">,</span> <span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC692'>						<span class="p">}</span></div><div class='line' id='LC693'>					<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;scheme&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">MERGE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC694'>						<span class="nv">$options</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$options</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;to&#39;</span><span class="o">=&gt;</span> <span class="nv">$to</span><span class="p">,</span> <span class="s1">&#39;from&#39;</span><span class="o">=&gt;</span> <span class="nv">$from</span><span class="p">));</span></div><div class='line' id='LC695'>						<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">copy</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></div><div class='line' id='LC696'>					<span class="p">}</span></div><div class='line' id='LC697'>				<span class="p">}</span></div><div class='line' id='LC698'>			<span class="p">}</span></div><div class='line' id='LC699'>			<span class="nb">closedir</span><span class="p">(</span><span class="nv">$handle</span><span class="p">);</span></div><div class='line' id='LC700'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC701'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC702'>		<span class="p">}</span></div><div class='line' id='LC703'><br/></div><div class='line' id='LC704'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC705'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC706'>		<span class="p">}</span></div><div class='line' id='LC707'>		<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC708'>	<span class="p">}</span></div><div class='line' id='LC709'><br/></div><div class='line' id='LC710'><span class="sd">/**</span></div><div class='line' id='LC711'><span class="sd"> * Recursive directory move.</span></div><div class='line' id='LC712'><span class="sd"> *</span></div><div class='line' id='LC713'><span class="sd"> * ### Options</span></div><div class='line' id='LC714'><span class="sd"> *</span></div><div class='line' id='LC715'><span class="sd"> * - `to` The directory to copy to.</span></div><div class='line' id='LC716'><span class="sd"> * - `from` The directory to copy from, this will cause a cd() to occur, changing the results of pwd().</span></div><div class='line' id='LC717'><span class="sd"> * - `chmod` The mode to copy the files/directories with.</span></div><div class='line' id='LC718'><span class="sd"> * - `skip` Files/directories to skip.</span></div><div class='line' id='LC719'><span class="sd"> *</span></div><div class='line' id='LC720'><span class="sd"> * @param array $options (to, from, chmod, skip)</span></div><div class='line' id='LC721'><span class="sd"> * @return boolean Success</span></div><div class='line' id='LC722'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::move</span></div><div class='line' id='LC723'><span class="sd"> */</span></div><div class='line' id='LC724'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">move</span><span class="p">(</span><span class="nv">$options</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC725'>		<span class="nv">$to</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC726'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$options</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC727'>			<span class="nv">$to</span> <span class="o">=</span> <span class="nv">$options</span><span class="p">;</span></div><div class='line' id='LC728'>			<span class="nv">$options</span> <span class="o">=</span> <span class="p">(</span><span class="k">array</span><span class="p">)</span><span class="nv">$options</span><span class="p">;</span></div><div class='line' id='LC729'>		<span class="p">}</span></div><div class='line' id='LC730'>		<span class="nv">$options</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span></div><div class='line' id='LC731'>			<span class="k">array</span><span class="p">(</span><span class="s1">&#39;to&#39;</span> <span class="o">=&gt;</span> <span class="nv">$to</span><span class="p">,</span> <span class="s1">&#39;from&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">,</span> <span class="s1">&#39;mode&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">,</span> <span class="s1">&#39;skip&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">()),</span></div><div class='line' id='LC732'>			<span class="nv">$options</span></div><div class='line' id='LC733'>		<span class="p">);</span></div><div class='line' id='LC734'><br/></div><div class='line' id='LC735'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">copy</span><span class="p">(</span><span class="nv">$options</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC736'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">delete</span><span class="p">(</span><span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC737'>				<span class="k">return</span> <span class="p">(</span><span class="nx">bool</span><span class="p">)</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cd</span><span class="p">(</span><span class="nv">$options</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">]);</span></div><div class='line' id='LC738'>			<span class="p">}</span></div><div class='line' id='LC739'>		<span class="p">}</span></div><div class='line' id='LC740'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC741'>	<span class="p">}</span></div><div class='line' id='LC742'><br/></div><div class='line' id='LC743'><span class="sd">/**</span></div><div class='line' id='LC744'><span class="sd"> * get messages from latest method</span></div><div class='line' id='LC745'><span class="sd"> *</span></div><div class='line' id='LC746'><span class="sd"> * @return array</span></div><div class='line' id='LC747'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::messages</span></div><div class='line' id='LC748'><span class="sd"> */</span></div><div class='line' id='LC749'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">messages</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC750'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_messages</span><span class="p">;</span></div><div class='line' id='LC751'>	<span class="p">}</span></div><div class='line' id='LC752'><br/></div><div class='line' id='LC753'><span class="sd">/**</span></div><div class='line' id='LC754'><span class="sd"> * get error from latest method</span></div><div class='line' id='LC755'><span class="sd"> *</span></div><div class='line' id='LC756'><span class="sd"> * @return array</span></div><div class='line' id='LC757'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::errors</span></div><div class='line' id='LC758'><span class="sd"> */</span></div><div class='line' id='LC759'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">errors</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC760'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_errors</span><span class="p">;</span></div><div class='line' id='LC761'>	<span class="p">}</span></div><div class='line' id='LC762'><br/></div><div class='line' id='LC763'><span class="sd">/**</span></div><div class='line' id='LC764'><span class="sd"> * Get the real path (taking &quot;..&quot; and such into account)</span></div><div class='line' id='LC765'><span class="sd"> *</span></div><div class='line' id='LC766'><span class="sd"> * @param string $path Path to resolve</span></div><div class='line' id='LC767'><span class="sd"> * @return string The resolved path</span></div><div class='line' id='LC768'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::realpath</span></div><div class='line' id='LC769'><span class="sd"> */</span></div><div class='line' id='LC770'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">realpath</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC771'>		<span class="nv">$path</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="nx">DS</span><span class="p">,</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$path</span><span class="p">));</span></div><div class='line' id='LC772'>		<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="s1">&#39;..&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC773'>			<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">FolderExt</span><span class="o">::</span><span class="na">isAbsolute</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC774'>				<span class="nv">$path</span> <span class="o">=</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">addPathElement</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">,</span> <span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC775'>			<span class="p">}</span></div><div class='line' id='LC776'>			<span class="k">return</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC777'>		<span class="p">}</span></div><div class='line' id='LC778'>		<span class="nv">$parts</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="nx">DS</span><span class="p">,</span> <span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC779'>		<span class="nv">$newparts</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC780'>		<span class="nv">$newpath</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC781'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$path</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">===</span> <span class="nx">DS</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC782'>			<span class="nv">$newpath</span> <span class="o">=</span> <span class="nx">DS</span><span class="p">;</span></div><div class='line' id='LC783'>		<span class="p">}</span></div><div class='line' id='LC784'><br/></div><div class='line' id='LC785'>		<span class="k">while</span> <span class="p">((</span><span class="nv">$part</span> <span class="o">=</span> <span class="nb">array_shift</span><span class="p">(</span><span class="nv">$parts</span><span class="p">))</span> <span class="o">!==</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC786'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$part</span> <span class="o">===</span> <span class="s1">&#39;.&#39;</span> <span class="o">||</span> <span class="nv">$part</span> <span class="o">===</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC787'>				<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC788'>			<span class="p">}</span></div><div class='line' id='LC789'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$part</span> <span class="o">===</span> <span class="s1">&#39;..&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC790'>				<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$newparts</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC791'>					<span class="nb">array_pop</span><span class="p">(</span><span class="nv">$newparts</span><span class="p">);</span></div><div class='line' id='LC792'>					<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC793'>				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC794'>					<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC795'>				<span class="p">}</span></div><div class='line' id='LC796'>			<span class="p">}</span></div><div class='line' id='LC797'>			<span class="nv">$newparts</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$part</span><span class="p">;</span></div><div class='line' id='LC798'>		<span class="p">}</span></div><div class='line' id='LC799'>		<span class="nv">$newpath</span> <span class="o">.=</span> <span class="nb">implode</span><span class="p">(</span><span class="nx">DS</span><span class="p">,</span> <span class="nv">$newparts</span><span class="p">);</span></div><div class='line' id='LC800'><br/></div><div class='line' id='LC801'>		<span class="k">return</span> <span class="nx">FolderExt</span><span class="o">::</span><span class="na">slashTerm</span><span class="p">(</span><span class="nv">$newpath</span><span class="p">);</span></div><div class='line' id='LC802'>	<span class="p">}</span></div><div class='line' id='LC803'><br/></div><div class='line' id='LC804'><span class="sd">/**</span></div><div class='line' id='LC805'><span class="sd"> * Returns true if given $path ends in a slash (i.e. is slash-terminated).</span></div><div class='line' id='LC806'><span class="sd"> *</span></div><div class='line' id='LC807'><span class="sd"> * @param string $path Path to check</span></div><div class='line' id='LC808'><span class="sd"> * @return boolean true if path ends with slash, false otherwise</span></div><div class='line' id='LC809'><span class="sd"> * @link http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html#FolderExt::isSlashTerm</span></div><div class='line' id='LC810'><span class="sd"> */</span></div><div class='line' id='LC811'>	<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isSlashTerm</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC812'>		<span class="nv">$lastChar</span> <span class="o">=</span> <span class="nv">$path</span><span class="p">[</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="o">-</span> <span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC813'>		<span class="k">return</span> <span class="nv">$lastChar</span> <span class="o">===</span> <span class="s1">&#39;/&#39;</span> <span class="o">||</span> <span class="nv">$lastChar</span> <span class="o">===</span> <span class="s1">&#39;\\&#39;</span><span class="p">;</span></div><div class='line' id='LC814'>	<span class="p">}</span></div><div class='line' id='LC815'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading large-loading-area" style="display:none;" data-tree-list-url="/dereuromark/PHPUnit-Cake2/tree-list/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff" data-blob-url-prefix="/dereuromark/PHPUnit-Cake2/blob/3d0df8ba726fb913249ee08d8f0bd9f6a27fc7ff">
  <img src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-64.gif?1329872008" height="64" width="64">
</div>

      </div>
      <div class="context-overlay"></div>
    </div>


      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Analyze web traffic</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://mobile.github.com/">Issues for iPhone</a></li>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Extras</h4>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.36200s from fe6.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspaces_logo.png?1329521041" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selection as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selection as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selection from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div class="ajax-error-message">
      <p><span class="icon"></span> Something went wrong with that request. Please try again. <a href="javascript:;" class="ajax-error-dismiss">Dismiss</a></p>
    </div>

    
    
    
    <span id='server_response_time' data-time='0.36396' data-host='fe6'></span>
  </body>
</html>

