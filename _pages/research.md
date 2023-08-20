---
title: "Research"
layout: splash
permalink: /research/
---
My research ambition is to build **autonomous agents** that can solve a wide variety of complex tasks and continuously learn new ones. I believe this calls for decision-making systems that can **continually** learn state and action abstractions and use them to quickly **generalize** to new tasks. Toward this goal, I work on various aspects of **reinforcement learning**.
I was fortunate to be advised by professors [George Konidaris](https://cs.brown.edu/people/gdk/) and [Michael Littman](https://www.littmania.com) at Brown. Please check out my selected work below. 
{: style="text-align: center;font-size:110%;padding-top:40px"}

[CV](/pdfs/bio/CV.pdf) \|
[Google Scholar](https://scholar.google.com/citations?user=unQVOJkAAAAJ&hl=en) \|
[Github](https://github.com/zhouzypaul)
{: style="text-align: center;font-size: 100%"}


<!-- style -->
<link rel="stylesheet" href="/assets/css/styles.css">


## Publications
### Conferences 

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='/images/paper-images/tiered-reward.jpg' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Specifying Behavior Preference with Tiered Reward Functions
              </p>
              <div class="skills">
                <span class="skill">behavior specification</span>
                <span class="skill">reward design</span>
                <span class="skill">Pareto optimality</span>
                <span class="skill">fast learning</span>
              </div>
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://www.linkedin.com/in/henry-sowerby-a54aa592/">Henry Sowerby</a>,
              <a href="https://www.littmania.com">Michael Littman</a>
              <br>
				<em>ICML workshop (<a href="https://sites.google.com/view/mfpl-icml-2023/home?authuser=0">MFPL</a>)</em>, 2023.
              <br>
              [<a href="https://arxiv.org/abs/2212.03733">arXiv</a>]
              [<a href="https://github.com/zhouzypaul/tiered-reward">code</a>]
              <br>
              <p>Proposes a strict partial ordering of the policy space to tradeoff policy-preference, then introduces a family of environment-independent tiered reward functions that are guaranteed to induce preferred policy. Finally, we show tiered rewards induce fast learning.<br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='/images/paper-images/actgen.png' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Characterizing the Action-Generalization Gap in Deep Q-Learning
              </p>
              <div class="skills">
                <span class="skill">DQN</span>
                <span class="skill">action generalization</span>
              </div>
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://camallen.net">Cameron Allen</a>,
              <a href="https://cs.brown.edu/people/kasadiat/authors/kavosh-asadi/">Kavosh Asadi</a>,
              <a href="https://cs.brown.edu/people/gdk/">George Konidaris</a>
              <br>
				<em>Multidisciplinary Conference on Reinforcement Learning and Decision Making (RLDM)</em>, 2022.
              <br>
              [<a href="https://arxiv.org/abs/2205.05588">arXiv</a>]
              [<a href="../pdfs/posters/actgen_rldm_poster.pdf">poster</a>]
              [<a href="https://github.com/camall3n/actgen">code</a>]
              <br>
              <p>Introduces a way of evaluating action-generalization in Deep Q-Learning using an oracle (expert knowledge of action similarity), and shows that DQN's ability to generalize over actions depends on the size of the action space. <br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='/images/paper-images/optre.png' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Designing Rewards for Fast Learning
              </p>
              <div class="skills">
                <span class="skill">reward design</span>
                <span class="skill">Interactive RL</span>
              </div>
              <a href="https://www.linkedin.com/in/henry-sowerby-a54aa592/">Henry Sowerby</a>,
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://www.littmania.com">Michael Littman</a>
              <br>
				<em>Multidisciplinary Conference on Reinforcement Learning and Decision Making (RLDM)</em>, 2022. <FONT COLOR="red">(Oral) </FONT>
              <br>
              [<a href="https://arxiv.org/abs/2205.15400">arXiv</a>]
              [<a href="../pdfs/posters/optre_rldm_poster.pdf">poster</a>]
              [<a href="https://brown.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=7adfa2ab-3dde-46ab-b69e-aea800efe5ef">oral at RLDM</a> at 1:20:00]
              <br>
              <p>Identifies properties of rewards that lead to fast learning: rewards should have big action gaps and small "subjective discounts". Proposes an algorithm to design these rewards.<br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 

### School Journal

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='https://raw.githubusercontent.com/openai/procgen/master/screenshots/coinrun.png' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Policy Transfer in Lifelong Reinforcement Learning through Learning Generalizing Features
              </p>
              <div class="skills">
                <span class="skill">lifelong RL</span>
                <span class="skill">transfer learning</span>
                <span class="skill">attention</span>
              </div>
              <strong>Zhiyuan Zhou</strong> (Advisor:  <a href="https://cs.brown.edu/people/gdk/">George Konidaris</a>)
              <br>
				<em>Undergraduate Honors Thesis, Brown CS</em>, 2023.
              <br>
              [<a href="https://cs.brown.edu/media/filer_public/c2/72/c272a1f8-1186-4a85-8f97-cfe8a1a7278a/zhouzhiyuan_honors_thesis.pdf">pdf</a>]
              [<a href="https://github.com/zhouzypaul/policy-transfer-lifelong-rl">code</a>]
              <br>
              <p>
              Introduces an approach to learn state features that generalize across tasks drawn from the same distribution. We use an attantion mechanism to learn an ensemble of minimally overlapping state features, leading to an ensemble of policies. We then use a bandit algorithm to learn to identify the generalizing feature in the ensemble and capitalize on that to learn a transferable policy. <br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='https://www.webtunix.ai/static/img/anotation.jpg' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Improving Post-Processing on Video Object Recognition Using Inertial Measurement Unit
              </p>
                <div class="skills">
                  <span class="skill">object recognition</span>
                  <span class="skill">Hidden Markov Models</span>
                  <span class="skill">Kalman Filter</span>
                  <span class="skill">Inertial Measurement Unit</span>
                </div>
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://rocketreach.co/spencer-boyum-email_78257776">Spencer Boyum</a>,
              <a href="https://vivo.brown.edu/display/mparadis">Michael Paradiso</a>
              <br>
				<em>Brown Undergraduate Research Journal</em>, Spring 2022.
              <br>
              [<a href="https://brownresearchclub.weebly.com/spring-2022.html">paper</a> on page 29]
              [<a href="https://github.com/zhouzypaul/object-recognition-imu">code</a>]
              <br>
              <p> How to improve the accuracy of object recognition in videos if given per-frame inertial measurements of the camera. We propose two way to do so.<br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 
