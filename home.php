<?php include 'inc/header.php';?>
 <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="home-content">
                    <div class="home">
                                    <div class="wrapper" id="app">
                                                        <div class="player">
                                                            <div class="player__top">
                                                        <div class="player-cover">
                                                            <transition-group :name="transitionName">
                                                                <div class="player-cover__item" v-if="$index === currentTrackIndex" :style="{ backgroundImage: `url(${track.cover})` }"  v-for="(track, $index) in tracks" :key="$index"></div>
                                                            </transition-group>
                                                        </div>
                                                        <div class="player-controls">
                                                            <div class="player-controls__item -favorite" :class="{ active : currentTrack.favorited }" @click="favorite">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-heart-o"></use>
                                                            </svg>
                                                            </div>
                                                            <a :href="currentTrack.url" target="_blank" class="player-controls__item">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-link"></use>
                                                            </svg>
                                                            </a>
                                                            <div class="player-controls__item" @click="prevTrack">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-prev"></use>
                                                            </svg>
                                                            </div>
                                                            <div class="player-controls__item" @click="nextTrack">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-next"></use>
                                                            </svg>
                                                            </div>
                                                            <div class="player-controls__item -xl js-play" @click="play">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-pause" v-if="isTimerPlaying"></use>
                                                                <use xlink:href="#icon-play" v-else></use>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="progress" ref="progress">
                                                        <div class="progress__top">
                                                            <div class="album-info" v-if="currentTrack">
                                                            <div class="album-info__name">{{ currentTrack.artist }}</div>
                                                            <div class="album-info__track">{{ currentTrack.name }}</div>
                                                            </div>
                                                            <div class="progress__duration">{{ duration }}</div>
                                                        </div>
                                                        <div class="progress__bar" @click="clickProgress">
                                                            <div class="progress__current" :style="{ width : barWidth }"></div>
                                                        </div>
                                                        <div class="progress__time">{{ currentTime }}</div>
                                                        </div>
                                                        <div v-cloak></div>
                                                    <?php include 'svg.php';?>   
                                     
                                    </div>                                        
                 </div>              
               </div>        
            </div>      
        </section>   
<?php 
include 'inc/footer.php'
?>



