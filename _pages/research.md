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
[Github](https://github.com/zhouzypaul) \|
[Twitter](https://twitter.com/zhiyuan_zhou_)
{: style="text-align: center;font-size: 100%"}


<!-- style -->
<link rel="stylesheet" href="/assets/css/styles.css">


## Publications

### Conferences 

{% capture skills %}
hierarchical RL|skill transfer
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<a href="https://scholar.google.com/citations?user=yCd081YAAAAJ&hl=en">Anita de Mello Koch</a>,
<a href="https://abagaria.github.io">Akhil Bagaria</a>,
<a href="https://www.linkedin.com/in/bingnan-huo-a04444258">Bingnan Huo</a>,
<strong>Zhiyuan Zhou</strong>,
<a href="https://camallen.net">Cameron Allen</a>,
<a href="https://cs.brown.edu/people/gdk/">George Konidaris</a>
{% endcapture %}

{% capture links %}
[<a href="https://openreview.net/pdf?id=I3lTKA9tjO">paper</a>]
{% endcapture %}

{% include paper_table.html 
  image="/images/paper-images/skill_transfer.jpeg"
  height="180"
  title="Learning Transferable Sub-Goals by Hypothesizing Generalizing Features"
  skills=skill_list
  authors=authors
  venue="AAAI Workshop on Generalization in Planning, 2025"
  award="<FONT COLOR=\"red\">(Oral)</FONT>"
  links=links
  description="Hierarchical RL is sample efficient when the <b>low level skills are transfered and reused</b>. However, learning transferable skills is hard when the agent is only exposed to few, or one, instance of the task. We find that we can identify subgoals that transfer to unseen tasks with an <b>ensemble of classifiers that focus on diverse features</b>."
%}

{% capture skills %}
deep reinforcement learning|fine-tuning
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou*</strong>,
<a href="https://andypeng05.github.io/">Andy Peng*</a>,
<a href="https://colinqiyangli.github.io">Qiyang Li</a>,
<a href="https://people.eecs.berkeley.edu/~svlevine/">Sergey Levine</a>,
<a href="https://aviralkumar2907.github.io">Aviral Kumar</a>
{% endcapture %}

{% capture links %}
[<a href="http://arxiv.org/abs/2412.07762">paper</a>]
[<a href="/wsrl/">website</a>]
[<a href="https://github.com/zhouzypaul/wsrl">code</a>]
{% endcapture %}

{% include paper_table.html 
  image="/images/paper-images/wsrl/teaser.png"
  title="Efficient Online Reinforcement Learning Fine-Tuning Need Not Retain Offline Data"
  skills=skill_list
  authors=authors
  venue="International Conference on Learning Representations (ICLR), 2025"
  links=links
  description="Can we finetune policies and values from offline RL <b>*without retaining the offline data*</b>? Current methods require keeping the offline data for stability and performance, but this make RL hard to scale up when the offline dataset gets bigger and bigger. Turns out a simple receipe, Warm-start RL, is able to finetune rapidly without data retention!"
%}

{% capture skills %}
robotics|autonomous improvement|language-conditioned skills|VLM
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou*</strong>,
<a href="https://pranavatreya.github.io">Pranav Atreya*</a>,
<a href="https://www.linkedin.com/in/abraham-lee-4a0497242?original_referer=https%3A%2F%2Fwww.google.com%2F">Abraham Lee</a>,
<a href="https://homerwalke.com/">Homer Walke</a>,
<a href="https://www.oiermees.com/">Oier Mees</a>,
<a href="https://people.eecs.berkeley.edu/~svlevine/">Sergey Levine</a>
{% endcapture %}

{% capture links %}
[<a href="https://auto-improvement.github.io">website</a>]
[<a href="https://arxiv.org/abs/2407.20635">arXiv</a>]
[<a href="https://github.com/rail-berkeley/soar">code</a>]
[<a href="https://rail.eecs.berkeley.edu/datasets/soar_release/">dataset</a>]
{% endcapture %}

{% capture video_content %}
<div style="max-width:100%; display:flex; justify-content:center;">
  <video style="width:100%; max-width:280px; height:auto;" controls autoplay>
    <source src="https://auto-improvement.github.io/static/videos/teaser_video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>
{% endcapture %}

{% include paper_table.html 
  custom_image=video_content
  title="Autonomous Improvement of Instruction Following Skills via Foundation Models"
  skills=skill_list
  authors=authors
  venue="Conference on Robot Learning (CoRL), 2024"
  links=links
  description="Can robots <b>self-improve by collecting data autonomously</b>🤖? We introduce SOAR, a system for large-scale autonomous data collection 🚀 and autonomous improvement📈of a multi-task language-conditioned policy in diverse scenes without human interventions ."
%}

{% capture skills %}
behavior specification|reward design|Pareto optimality|fast learning
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou</strong>,
<a href="https://www.linkedin.com/in/shreyas-raman-167a2a142/">Shreyas Sundara Raman</a>,
<a href="https://www.linkedin.com/in/henry-sowerby-a54aa592/">Henry Sowerby</a>,
<a href="https://www.littmania.com">Michael Littman</a>
{% endcapture %}

{% capture links %}
[<a href="https://rlj.cs.umass.edu/2024/papers/Paper159.html">paper</a>]
[<a href="/tiered_reward/">website</a>]
[<a href="https://github.com/zhouzypaul/tiered-reward">code</a>]
[<a href="https://x.com/zhiyuan_zhou_/status/1821261534456402001">thread</a>]
{% endcapture %}

{% include paper_table.html 
  image="/images/paper-images/tiered-reward.jpg"
  width="160"
  title="Tiered Reward: Designing Rewards for Specification and Fast Learning of Desired Behavior"
  skills=skill_list
  authors=authors
  venue="Reinforcement Learning Conference (RLC), 2024"
  links=links
  description="Do you need a reward function for your goal-reaching task? Use Tiered Reward! We prove that Tiered Reward <b>guarantees to lead to an optimal policy</b>, and show that it can lead to <b>fast learning</b> in various deep and tabular environments."
%}

{% capture skills %}
action generalization|DQN
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou</strong>,
<a href="https://camallen.net">Cameron Allen</a>,
<a href="https://cs.brown.edu/people/kasadiat/authors/kavosh-asadi/">Kavosh Asadi</a>,
<a href="https://cs.brown.edu/people/gdk/">George Konidaris</a>
{% endcapture %}

{% capture links %}
[<a href="https://arxiv.org/abs/2205.05588">arXiv</a>]
[<a href="../pdfs/posters/actgen_rldm_poster.pdf">poster</a>]
[<a href="https://github.com/camall3n/actgen">code</a>]
{% endcapture %}

{% include paper_table.html 
  image="/images/paper-images/actgen.png"
  width="160"
  title="Characterizing the Action-Generalization Gap in Deep Q-Learning"
  skills=skill_list
  authors=authors
  venue="Multidisciplinary Conference on Reinforcement Learning and Decision Making (RLDM), 2022"
  links=links
  description="We introduce a way to evaluate action-generalization in Deep Q-Learning using an oracle (expert knowledge of action similarity), and shows that DQN's ability to generalize over actions depends on the size of the action space."
%}

{% capture skills %}
reward design|Interactive RL
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<a href="https://www.linkedin.com/in/henry-sowerby-a54aa592/">Henry Sowerby</a>,
<strong>Zhiyuan Zhou</strong>,
<a href="https://www.littmania.com">Michael Littman</a>
{% endcapture %}

{% capture links %}
[<a href="https://arxiv.org/abs/2205.15400">arXiv</a>]
[<a href="../pdfs/posters/optre_rldm_poster.pdf">poster</a>]
[<a href="https://brown.hosted.panopto.com/Panopto/Pages/Viewer.aspx?id=7adfa2ab-3dde-46ab-b69e-aea800efe5ef">oral at RLDM</a> at 1:20:00]
{% endcapture %}

{% include paper_table.html 
  image="/images/paper-images/optre.png"
  width="160"
  title="Designing Rewards for Fast Learning"
  skills=skill_list
  authors=authors
  venue="Multidisciplinary Conference on Reinforcement Learning and Decision Making (RLDM), 2022"
  award="<FONT COLOR=\"red\">(Oral)</FONT>"
  links=links
  description="What kind of reward functions make RL fast? We advocate for rewards with big action gaps and small \"subjective discounts\". We present an algorithm to design these rewards."
%}

### School Journal

{% capture skills %}
lifelong RL|transfer learning|attention
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou</strong> (Advisor:  <a href="https://cs.brown.edu/people/gdk/">George Konidaris</a>)
{% endcapture %}

{% capture links %}
[<a href="https://cs.brown.edu/media/filer_public/c2/72/c272a1f8-1186-4a85-8f97-cfe8a1a7278a/zhouzhiyuan_honors_thesis.pdf">pdf</a>]
[<a href="https://github.com/zhouzypaul/policy-transfer-lifelong-rl">code</a>]
{% endcapture %}

{% include paper_table.html 
  image="https://raw.githubusercontent.com/openai/procgen/master/screenshots/coinrun.png"
  width="160"
  title="Policy Transfer in Lifelong Reinforcement Learning through Learning Generalizing Features"
  skills=skill_list
  authors=authors
  venue="Undergraduate Honors Thesis, Brown CS, 2023"
  links=links
  description="Introduces an approach to learn state features that generalize across tasks drawn from the same distribution. We use an attantion mechanism to learn an ensemble of minimally overlapping state features, leading to an ensemble of policies. We then use a bandit algorithm to learn to identify the generalizing feature in the ensemble and capitalize on that to learn a transferable policy."
%}

{% capture skills %}
object recognition|Hidden Markov Models|Kalman Filter|Inertial Measurement Unit
{% endcapture %}
{% assign skill_list = skills | split: "|" %}

{% capture authors %}
<strong>Zhiyuan Zhou</strong>,
<a href="https://rocketreach.co/spencer-boyum-email_78257776">Spencer Boyum</a>,
<a href="https://vivo.brown.edu/display/mparadis">Michael Paradiso</a>
{% endcapture %}

{% capture links %}
[<a href="https://brownresearchclub.weebly.com/spring-2022.html">paper</a> on page 29]
[<a href="https://github.com/zhouzypaul/object-recognition-imu">code</a>]
{% endcapture %}

{% include paper_table.html 
  image="https://www.webtunix.ai/static/img/anotation.jpg"
  width="160"
  title="Improving Post-Processing on Video Object Recognition Using Inertial Measurement Unit"
  skills=skill_list
  authors=authors
  venue="Brown Undergraduate Research Journal, Spring 2022"
  links=links
  description="How to improve the accuracy of object recognition in videos if given per-frame inertial measurements of the camera. We propose two way to do so."
%}
