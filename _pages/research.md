---
title: "Research"
layout: splash
permalink: /research/
---
My research ambition is to build **autonomous agents** that can solve a wide variety of complex tasks and continuously learn new ones. I believe this calls for decision-making systems that can effectively build on **prior knowledge** (e.g. large-scale pre-training) and **continually** learn to generalize to new tasks. Towards this goal, I work on various aspects of **robotics** and **reinforcement learning**. Currently, I am most excited about autonomous improvement of robotic skills and offline-to-online RL.
I am fortunate to be advised by professor [Sergey Levine](https://people.eecs.berkeley.edu/~svlevine/) at UC Berkeley. 
During my undergrad I was advised by professors [George Konidaris](https://cs.brown.edu/people/gdk/) and [Michael Littman](https://www.littmania.com) at Brown. Please check out my selected work below.
{: style="text-align: center;font-size:110%;padding-top:40px"}

[CV](/pdfs/bio/CV.pdf) \|
[Google Scholar](https://scholar.google.com/citations?user=unQVOJkAAAAJ&hl=en) \|
[Github](https://github.com/zhouzypaul)
{: style="text-align: center;font-size: 100%"}


<!-- style -->
<link rel="stylesheet" href="/assets/css/styles.css">


## Publications

### Preprints

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <img src='/images/paper-images/wsrl.pdf' width="280">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Efficient Online Reinforcement Learning Fine-Tuning Need Not Retain Offline Data
              </p>
              <div class="skills">
                <span class="skill">deep reinforcement learning</span>
                <span class="skill">fine-tuning</span>
              </div>
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://www.linkedin.com/in/andypeng05">Andy Peng</a>,
              <a href="https://colinqiyangli.github.io">Qiyang Li</a>,
              <a href="https://people.eecs.berkeley.edu/~svlevine/">Sergey Levine</a>,
              <a href="https://aviralkumar2907.github.io">Aviral Kumar</a>,
              <br>
				<em>arXiv preprint</em>, 2024
              <br>
              [<a href="http://arxiv.org/abs/2412.07762">paper</a>]
              [<a href="/wsrl/">website</a>]
              [<a href="https://github.com/zhouzypaul/wsrl">code</a>]
              <br>
              <p>
              Can we finetune policies and values from offline RL <b>*without retaining the offline data*</b>? Current methods require keeping the offline data
              for stability and performance, but this make RL hard to scale up when the offline dataset gets bigger and bigger. Turns out a simple receipe, Warm-start RL, is able to finetune rapidly without data retention! <br>
              </p>
            </td>
          </tr>
        </tbody>
</table> 

### Conferences 

<table style="width:100%;border:0px;border-spacing:0px;border-collapse:separate;margin-right:auto;margin-left:auto;">
        <tbody>
          <!-- <tr bgcolor="#ffffd0"> -->
          <tr>
            <td style="padding:20px;width:25%;vertical-align:middle">
              <div>
                <!-- <img src='/images/paper-images/soar.pdf' width="260"> -->
                <!-- <blockquote class="twitter-tweet" data-media-max-width="260"><p lang="en" dir="ltr">Can robots self-improve by collecting data autonomously🤖?<br><br>Introducing SOAR: a system for large-scale autonomous data collection 🚀 and autonomous improvement📈of a multi-task language-conditioned policy in diverse scenes without human interventions .<a href="https://t.co/tepGrLQYdw">https://t.co/tepGrLQYdw</a> <a href="https://t.co/LBddvbib92">pic.twitter.com/LBddvbib92</a></p>&mdash; Paul Zhou (@zhiyuan_zhou_) <a href="https://twitter.com/zhiyuan_zhou_/status/1818338141788684706?ref_src=twsrc%5Etfw">July 30, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                <video width="260" height="210" controls autoplay>
                  <source src="https://auto-improvement.github.io/static/videos/teaser_video.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Autonomous Improvement of Instruction Following Skills via Foundation Models
              </p>
              <div class="skills">
                <span class="skill">robotics</span>
                <span class="skill">autonomous improvement</span>
                <span class="skill">language-conditioned skills</span>
                <span class="skill">VLM</span>
              </div>
              <strong>Zhiyuan Zhou*</strong>,
              <a href="https://pranavatreya.github.io">Pranav Atreya*</a>,
              <a href="https://www.linkedin.com/in/abraham-lee-4a0497242?original_referer=https%3A%2F%2Fwww.google.com%2F">Abraham Lee</a>,
              <a href="https://homerwalke.com/">Homer Walke</a>,
              <a href="https://www.oiermees.com/">Oier Mees</a>,
              <a href="https://people.eecs.berkeley.edu/~svlevine/">Sergey Levine</a>,
              <br>
              <em>Conference on Robot Learning (CoRL)</em>, 2024.
              <br>
              [<a href="https://auto-improvement.github.io">website</a>]
              [<a href="hhttps://arxiv.org/abs/2407.20635">arXiv</a>]
              [<a href="https://github.com/rail-berkeley/soar">code</a>]
              [<a href="https://rail.eecs.berkeley.edu/datasets/soar_release/">dataset</a>]
              <br>
              <p>
              Can robots <b>self-improve by collecting data autonomously</b>🤖? We introduce SOAR, a system for large-scale autonomous data collection 🚀 and autonomous improvement📈of a multi-task language-conditioned policy in diverse scenes without human interventions .<br>
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
                <img src='/images/paper-images/tiered-reward.jpg' width="160">
              </div>
            </td>
            <td style="padding:20px;width:75%;vertical-align:middle">
              <p style="font-family:'Lato',Verdana,Helvetica,sans-serif; font-size:14px;font-weight:700">
              Tiered Reward: Designing Rewards for Specification and Fast Learning of Desired Behavior
              </p>
              <div class="skills">
                <span class="skill">behavior specification</span>
                <span class="skill">reward design</span>
                <span class="skill">Pareto optimality</span>
                <span class="skill">fast learning</span>
              </div>
              <strong>Zhiyuan Zhou</strong>,
              <a href="https://www.linkedin.com/in/shreyas-raman-167a2a142/">Shreyas Sundara Raman</a>,
              <a href="https://www.linkedin.com/in/henry-sowerby-a54aa592/">Henry Sowerby</a>,
              <a href="https://www.littmania.com">Michael Littman</a>
              <br>
				<em>Reinforcement Learning Conference (RLC)</em>, 2024.
              <br>
              [<a href="https://rlj.cs.umass.edu/2024/papers/Paper159.html">paper</a>]
              [<a href="/tiered_reward/">website</a>]
              [<a href="https://github.com/zhouzypaul/tiered-reward">code</a>]
              [<a href="https://x.com/zhiyuan_zhou_/status/1821261534456402001">thread</a>]
              <br>
              <p>
              Do you need a reward function for your goal-reaching task? Use Tiered Reward! We prove that Tiered Reward <b>guarantees to lead to an optimal policy</b>, and show that it can lead to <b>fast learning</b> in various deep and tabular environments.<br>
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
                <span class="skill">action generalization</span>
                <span class="skill">DQN</span>
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
              <p>We introduce a way to evaluate action-generalization in Deep Q-Learning using an oracle (expert knowledge of action similarity), and shows that DQN's ability to generalize over actions depends on the size of the action space. <br>
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
              <p>What kind of reward functions make RL fast? We advocate for rewards with big action gaps and small "subjective discounts". We present an algorithm to design these rewards.<br>
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
