<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);

?>
<script>
    AOS.init({
      duration: 800,
      easing: 'slide',
      once: true
    });
</script>
<style>
  
  #fixed-width-flamingo {  
    width: 300; 
    height: 200;
  }  

  .ftco-feature-1{
    text-align: center;
  }
  .owl-dot{
    border:none;
    background-color: white;
  }
  
</style>
<!-- Fk9EBOOAYiU -->
<a id="bgndVideo" class="player"
      data-property="{videoURL:'V35SKLVnd1E',
        showYTLogo:false, showAnnotations: false, showControls: false, 
        cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true,
         startAt:0, stopAt: 46, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-3">วัดใหม่อมตรส</h1>
            <p class="lead mx-auto desc mb-5">
                เดิมมีชื่อเรียกว่า วัดวรามะตาราม ต่อมาเปลี่ยนชื่อว่า วัดอำมาตยรส หรือ วัดอมฤตรส แต่ชาวบ้านนิยมเรียกกันว่า วัดบางขุนพรหม หรือ วัดบางขุนพรหมใน
            </p>
            <p class="text-center">
                <?= Html::a('อ่านประวัติวัด', ['/site/about'],['class'=>'btn btn-outline-white py-3 px-5']) ?>
            </p>
          </div>
        </div>

      </div>
    </div>
    
    <div class="schedule-wrap">
      <div class="d-md-flex align-items-center">
        <div class="hours mr-md-4 mb-4 mb-lg-0">
          <strong class="d-block">Hours</strong>
          Opening: 7:30am &mdash;
          Closing: 9:00pm
        </div>
        <div class="cta ml-auto">
          <a href="#contact-section" class="smoothscroll d-flex d-md-flex align-items-center btn">
            <span class="mx-auto">  <span>Contact us</span> <span class="arrow icon-keyboard_arrow_right"></span></span>
          </a>
        </div>
      </div>
    </div>

    <div class="site-section" id="news-section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8 section-heading">
            <!-- <span class="subheading">Stay Healthy</span> -->
            <h2 class="heading mb-3">ข่าวสารและกิจกรรม</h2>
            <p>ดูทั้งหมด</p>
          </div>
        </div>

        <!-- Slider -->
        <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
          <div class="slide">
            <div class="ftco-feature-1">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/pic_0.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Be Fit</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
            <img src="<?=Yii::getAlias('@web')?>/uploads/images/slide/pic_7.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Join Club</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/slide/pic_5.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Gym Fitness</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
            <img src="<?=Yii::getAlias('@web')?>/uploads/images/slide/pic_2.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Eat Vegie</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
            <img src="<?=Yii::getAlias('@web')?>/uploads/images/slide/pic_3.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Fruit Juices</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>
          
          <div class="slide">
            <div class="ftco-feature-1">
            <img src="<?=Yii::getAlias('@web')?>/uploads/images/slide/pic_5.jpg" id="fixed-width-flamingo">
              <div class="ftco-feature-1-text">
                <h2>Body Warmup</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="bgimg" style="background-image: url('<?=Yii::getAlias('@web')?>/uploads/images/bg_01.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">ร่วมเป็นส่วนหนึ่ง<br>ในการช่วยบำรุงพุทธศาสนา</h2>
            <p class="text-center"><?= Html::a('ร่วมทำบุญออนไลน์', ['/site/donate'],['class'=>'btn btn-outline-white py-3 px-5','style'=>'text-decoration:none']) ?></p>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section" id="classes-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">บทความธรรมะ</span>
            <h2 class="heading mb-3">ธรรมะน่ารู้</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
           
          </div>
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bgimg" style="background-image: url('<?=Yii::getAlias('@web')?>/uploads/images/bg_02.jpg');"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Every Step Counts</h2>
            <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ad, reprehenderit enim!
               <a href="#" target="_blank">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Fitness Sched</span>
            <h2 class="heading mb-3">ตารางกิจกรรม</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        
        <div class="row">
          <div class="col-12">
            <ul class="nav days d-flex" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday"
                  aria-selected="true">S</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday"
                  aria-selected="false">M</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday"
                  aria-selected="false">T</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">W</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday"
                  aria-selected="false">T</a>
              </li><li class="nav-item">
                <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday"
                  aria-selected="false">F</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday"
                  aria-selected="false">S</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
            
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_3.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_2.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_4.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="themes/stamina/images/img_1.jpg" alt="Image">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>


    <div class="bgimg" style="background-image: url('<?=Yii::getAlias('@web')?>/uploads/images/bg_03.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Your Fitness Partner Where Ever You Are</h2>
            <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate distinctio, quasi omnis!
              at <a href="#" target="_blank">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>


    
    
    <div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <span class="subheading">Trainer</span>
            <h2 class="heading mb-3">เจ้าอาวาส</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="person">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image" class="img-fluid">
              <h3>Justin Daniel</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/7.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/5.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="person">
              <img src="<?=Yii::getAlias('@web')?>/uploads/images/about/6.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
        
        </div>
      </div>
    </div>

    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <span class="subheading">Fitness Services</span>
            <h2 class="heading mb-3">Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
            <div class="ftco-feature-1">
            <i class="fa fa-dollar-sign fa-4x" style="color:#f89d13"></i>
              <div class="ftco-feature-1-text">
                <h2>ทำบุญออนไลน์</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ftco-feature-1">
            <i class="fas fa-praying-hands fa-4x" style="color:#f89d13"></i>
              <div class="ftco-feature-1-text">
                <h2>กิจนิมนต์</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="ftco-feature-1">
              <span class="icon flaticon-gym"></span>
              <div class="ftco-feature-1-text">
                <h2>Gym Fitness</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
            <div class="ftco-feature-1">
              <span class="icon flaticon-vegetables"></span>
              <div class="ftco-feature-1-text">
                <h2>Eat Vegie</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ftco-feature-1">
              <span class="icon flaticon-fruit-juice"></span>
              <div class="ftco-feature-1-text">
                <h2>Fruit Juices</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="ftco-feature-1">
              <span class="icon flaticon-stationary-bike"></span>
              <div class="ftco-feature-1-text">
                <h2>Body Warmup</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light contact-wrap" id="contact-section">
      <div class="container">
        
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Get In Touch</span>
            <h2 class="heading mb-3">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
            </p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-7">
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Write your message here."></textarea>
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
    
                  <input type="submit" class="btn btn-warning py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>
    
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="schedule-wrap2 clearfix">
      <div class="d-md-flex align-items-center">
        <div class="hours mr-md-4 mb-4 mb-lg-0">
          <strong class="d-block">Hours</strong>
          Opening: 7:30am &mdash;
          Closing: 9:00pm
        </div>
        <div class="cta ml-auto">
          <a href="#" class="d-flex d-md-flex align-items-center btn btn">
            <span class="mx-auto"> <span>Contact us</span> <span class="arrow icon-keyboard_arrow_right"></span></span>
          </a>
        </div>
      </div>
    </div>