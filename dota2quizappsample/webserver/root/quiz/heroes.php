<?php require "header.php" ?>
<div class="container">
  <!-- Button to Open the Modal -->
  <div class="row">
    <h2>Heroes</h2>
  <h2>Strength</h2>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    <img src="img/Abaddon/abaddon.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Abaddon)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Abaddon/skill1.png">
                  <div class="carousel-caption">
                    <h3>Mist Coil</h3>
                    <p>Damage an enemy unit or heal a friendly unit at the cost of some of Abaddon's health.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Abaddon/skill2.png">
              <div class="carousel-caption">
                <h3>Aphotic Shield</h3>
                <p>Removes certain types of negative buffs and stuns on cast.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Abaddon/skill3.png">
              <div class="carousel-caption">
                <h3>Curse of Avernus</h3>
                <p>Abaddon strikes an enemy with chilling curse on each attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Abaddon/skill4.png">
              <div class="carousel-caption">
                <h3>Borrowed Time</h3>
                <p>When activated, all damage dealt to you will heal instead of harm.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        
      </div>
    </div>
  </div>  
</div>




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myAlchemists">
    <img src="img/Alchemist/alchemist.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myAlchemists">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Alchemist)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myAlchemist" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myAlchemist" data-slide-to="0" class="active"></li>
              <li data-target="#myAlchemist" data-slide-to="1"></li>
              <li data-target="#myAlchemist" data-slide-to="2"></li>
              <li data-target="#myAlchemist" data-slide-to="3"></li>
              <li data-target="#myAlchemist" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Alchemist/skill1.png">
                  <div class="carousel-caption">
                    <h3>Acid Spray</h3>
                    <p>Sprays high-pressure acid across a target area. </p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Alchemist/skill2.png">
              <div class="carousel-caption">
                <h3>Unstable Concoction</h3>
                <p>Alchemist brews up an unstable concoction that he can throw at an enemy hero.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Alchemist/skill3.png">
              <div class="carousel-caption">
                <h3>Unstable Concoction Throw</h3>
                <p>Throw it before it blows up!</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Alchemist/skill4.png">
              <div class="carousel-caption">
                <h3>Greevil's Greed</h3>
                <p>Alchemist synthesizes additional gold from his enemies and bounty runes. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Alchemist/skill5.png">
              <div class="carousel-caption">
                <h3>Chemical Rage</h3>
                <p>Reducing base attack cooldown and increasing movement speed and regeneration.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myAlchemist" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myAlchemist" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myAxes">
    <img src="img/Axe/axe.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myAxes">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Axe)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myAxe" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myAxe" data-slide-to="0" class="active"></li>
              <li data-target="#myAxe" data-slide-to="1"></li>
              <li data-target="#myAxe" data-slide-to="2"></li>
              <li data-target="#myAxe" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Axe/skill1.png">
                  <div class="carousel-caption">
                    <h3>Berserker's Call</h3>
                    <p>Axe taunts nearby enemy units, forcing them to attack him.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Axe/skill2.png">
              <div class="carousel-caption">
                <h3>Battle Hunger</h3>
                <p>Axe gains movement speed for each unit affected with Battle Hunger.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Axe/skill3.png">
              <div class="carousel-caption">
                <h3>Counter Helix</h3>
                <p>Axe performs a helix counter attack, dealing pure damage to all nearby enemies.!</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Axe/skill4.png">
              <div class="carousel-caption">
                <h3>Culling Blade</h3>
                <p>Axe spots a weakness and strikes, instantly killing an enemy unit with low health.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myAxe" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myAxe" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBeastmasters">
    <img src="img/Beastmaster/beastmaster.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBeastmasters">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skill(Beastmaster)</h2>   
        </div>
        
        <!-- Modal body -->
         <div class="modal-body">
          
          <div id="myBeastmaster" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBeastmaster" data-slide-to="0" class="active"></li>
              <li data-target="#myBeastmaster" data-slide-to="1"></li>
              <li data-target="#myBeastmaster" data-slide-to="2"></li>
              <li data-target="#myBeastmaster" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Beastmaster/skill1.png">
                  <div class="carousel-caption">
                    <h3>Wild Axes</h3>
                    <p>Slicing through enemy units and trees along their path.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Beastmaster/skill2.png">
              <div class="carousel-caption">
                <h3>Call of the Wild</h3>
                <p>Beastmaster calls forth beasts to aid in the battlefield.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Beastmaster/skill3.png">
              <div class="carousel-caption">
                <h3>Inner Beast</h3>
                <p>Untaps the inner fury of allies, passively increasing their attack speed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Beastmaster/skill4.png">
              <div class="carousel-caption">
                <h3>Primal Roar</h3>
                <p>Beastmaster lets loose a deafening roar that stuns, and shoves open a path to its target.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBeastmaster" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBeastmaster" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBrewmasters">
    <img src="img/Brewmaster/brewmaster.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBrewmasters">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skill(Brewmaster)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBrewmaster" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBrewmaster" data-slide-to="0" class="active"></li>
              <li data-target="#myBrewmaster" data-slide-to="1"></li>
              <li data-target="#myBrewmaster" data-slide-to="2"></li>
              <li data-target="#myBrewmaster" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Brewmaster/skill1.png">
                  <div class="carousel-caption">
                    <h3>Thunder Clap</h3>
                    <p>Dealing damage and slowing the movement speed and attack rate of nearby enemy land units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Brewmaster/skill2.png">
              <div class="carousel-caption">
                <h3>Drunken Haze</h3>
                <p>Causing their movement speed to be reduced, and causing their attacks to have a chance to miss.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Brewmaster/skill3.png">
              <div class="carousel-caption">
                <h3>Drunken Brawler</h3>
                <p>Gives a chance to avoid attacks and to deal critical damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Beastmaster/skill4.png">
              <div class="carousel-caption">
                <h3>Primal Split</h3>
                <p>Splits Brewmaster into elements, forming 3 specialized warriors, adept at survival.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBrewmaster" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBrewmaster" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBristlebacks">
    <img src="img/Bristleback/bristleback.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBristlebacks">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Bristleback)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBristleback" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBristleback" data-slide-to="0" class="active"></li>
              <li data-target="#myBristleback" data-slide-to="1"></li>
              <li data-target="#myBristleback" data-slide-to="2"></li>
              <li data-target="#myBristleback" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Bristleback/skill1.png">
                  <div class="carousel-caption">
                    <h3>Viscous Nasal Goo</h3>
                    <p>Covers a target in snot, causing it to have reduced armor and movement speed.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Bristleback/skill2.png">
              <div class="carousel-caption">
                <h3>Quill Spray</h3>
                <p>Sprays enemy units with quills dealing damage in an area of effect around Bristleback.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bristleback/skill3.png">
              <div class="carousel-caption">
                <h3>Bristleback</h3>
                <p>Bristleback takes less damage if hit on the sides or rear. If Bristleback takes 210 damage from the rear.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bristleback/skill4.png">
              <div class="carousel-caption">
                <h3>Warpath</h3>
                <p>Bristleback works himself up into a fury every time he casts a spell.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBristleback" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBristleback" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCenty">
    <img src="img/CentaurWarrunner/Centaur Warrunner.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myCenty">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
         <h2 class="modal-title">Skill(Centaur Warrunner)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWarrunner" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWarrunner" data-slide-to="0" class="active"></li>
              <li data-target="#myWarrunner" data-slide-to="1"></li>
              <li data-target="#myWarrunner" data-slide-to="2"></li>
              <li data-target="#myWarrunner" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/CentaurWarrunner/skill1.png">
                  <div class="carousel-caption">
                    <h3>Hoof Stomp</h3>
                    <p>Slams the ground, stunning and damaging nearby enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/CentaurWarrunner/skill2.png">
              <div class="carousel-caption">
                <h3>Double Edge</h3>
                <p>Centaur strikes a mighty blow at melee range, damaging both himself and a small area around the target.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/CentaurWarrunner/skill3.png">
              <div class="carousel-caption">
                <h3>Return</h3>
                <p>Centaur counters all attacks, dealing damage back to the attacker based on a percentage of Centaur's strength.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/CentaurWarrunner/skill4.png">
              <div class="carousel-caption">
                <h3>Stampede</h3>
                <p>Centaur leads all allies into a vicious charge causing them to move through units at max speed and stop any enemy units.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWarrunner" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWarrunner" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCKS">
    <img src="img/Chaos Knight/Chaos Knight.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myCKS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Chaos Knight)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myCK" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCK" data-slide-to="0" class="active"></li>
              <li data-target="#myCK" data-slide-to="1"></li>
              <li data-target="#myCK" data-slide-to="2"></li>
              <li data-target="#myCK" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Chaos Knight/skill1.png">
                  <div class="carousel-caption">
                    <h3>Chaos Bolt</h3>
                    <p>Throws a mysterious bolt of energy at the target unit. It stuns for a random duration and deals random damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Chaos Knight/skill2.png">
              <div class="carousel-caption">
                <h3>Reality Rift</h3>
                <p>Teleports you, any images you have and the target unit to a random point along the line between the two of you.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Chaos Knight/skill3.png">
              <div class="carousel-caption">
                <h3>Chaos Strike</h3>
                <p>Attacks has a chance to deal bonus damage, also causing the critical strike to lifesteal for 75% of the damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Chaos Knight/skill4.png">
              <div class="carousel-caption">
                <h3>Phantasm</h3>
                <p>Summons several phantasmal copies of the Chaos Knight from alternate dimensions.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCK" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCK" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myClocks">
    <img src="img/Clockwerk/Clockwerk.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myClocks">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Clockwerk)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myClock" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myClock" data-slide-to="0" class="active"></li>
              <li data-target="#myClock" data-slide-to="1"></li>
              <li data-target="#myClock" data-slide-to="2"></li>
              <li data-target="#myClock" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Clockwerk/skill1.png">
                  <div class="carousel-caption">
                    <h3>Battery Assault</h3>
                    <p>Discharges high-powered shrapnel at random nearby enemy units, dealing minor magical damage and ministun.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Clockwerk/skill2.png">
              <div class="carousel-caption">
                <h3>Power Cogs</h3>
                <p>Forms a barrier of energized cogs around Clockwerk, trapping any units that are near.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Clockwerk/skill3.png">
              <div class="carousel-caption">
                <h3>Rocket Flare</h3>
                <p>Fires a global range flare that explodes over a given area, damaging enemies and providing vision for 10 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Clockwerk/skill4.png">
              <div class="carousel-caption">
                <h3>Hookshot</h3>
                <p>Fires a grappling device rapidly at the target location. If the hook hits a unit.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myClock" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myClock" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDooms">
    <img src="img/Doom/Doom.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myDooms">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Doom)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDoom" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDoom" data-slide-to="0" class="active"></li>
              <li data-target="#myDoom" data-slide-to="1"></li>
              <li data-target="#myDoom" data-slide-to="2"></li>
              <li data-target="#myDoom" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Doom/skill1.png">
                  <div class="carousel-caption">
                    <h3>Devour</h3>
                    <p>Consumes an enemy or neutral creep, acquiring any special abilities that it possessed.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Doom/skill2.png">
              <div class="carousel-caption">
                <h3>Scorched Earth</h3>
                <p>Carpets the nearby earth in flames which damage enemies and heal Doom.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Doom/skill3.png">
              <div class="carousel-caption">
                <h3>Infernal Blade</h3>
                <p>Doom swings his burning sword, igniting the enemy.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Doom/skill4.png">
              <div class="carousel-caption">
                <h3>Doom</h3>
                <p>Inflicts a curse that prevents an enemy Hero from casting spells or using items, while taking damage over time.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDoom" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDoom" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDKS">
    <img src="img/Dragon Knight/DragonKnight.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myDKS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Dragon Knight)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDkk" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDkk" data-slide-to="0" class="active"></li>
              <li data-target="#myDkk" data-slide-to="1"></li>
              <li data-target="#myDkk" data-slide-to="2"></li>
              <li data-target="#myDkk" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Dragon Knight/skill1.png">
                  <div class="carousel-caption">
                    <h3>Breathe Fire</h3>
                    <p>Unleashes a breath of fire in front of Dragon Knight that burns enemies and reduces the damage their attacks deal.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Dragon Knight/skill2.png">
              <div class="carousel-caption">
                <h3>Dragon Tail</h3>
                <p>Dragon Knight smites an enemy unit in melee range with his shield, stunning it while dealing minor damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Dragon Knight/skill3.png">
              <div class="carousel-caption">
                <h3>Dragon Blood</h3>
                <p>The life blood of the Dragon improves health regeneration and strengthens armor.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Dragon Knight/skill4.png">
              <div class="carousel-caption">
                <h3>Elder Dragon Form</h3>
                <p>Dragon Knight takes the form of one of three powerful elder dragons, increasing his speed, and Dragon Tail's range, while granting him new powers.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDKk" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDkk" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  









  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEarthSpirits">
    <img src="img/Earth Spirit/EarthSpirit.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myEarthSpirits">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Earth Spirit)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myEarthSpirit" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myEarthSpirit" data-slide-to="0" class="active"></li>
              <li data-target="#myEarthSpirit" data-slide-to="1"></li>
              <li data-target="#myEarthSpirit" data-slide-to="2"></li>
              <li data-target="#myEarthSpirit" data-slide-to="3"></li>
              <li data-target="#myEarthSpirit" data-slide-to="4"></li>                
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Earth Spirit/skill1.png">
                  <div class="carousel-caption">
                    <h3>Boulder Smash</h3>
                    <p>Earth Spirit smashes the target enemy or ally, sending them in the direction he is facing.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Earth Spirit/skill2.png">
              <div class="carousel-caption">
                <h3>Rolling Boulder</h3>
                <p>Earth Spirit gathers himself into a boulder and, after a 0.6s delay, rolls towards the target location, damaging enemy units</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Earth Spirit/skill3.png">
              <div class="carousel-caption">
                <h3>Geomagnetic Grip</h3>
                <p>Earth Spirit pulls the target Stone Remnant. Enemies struck by the gripped target will be silenced.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Earth Spirit/skill4.png">
              <div class="carousel-caption">
                <h3>Stone Remnant</h3>
                <p>Call a Stone Remnant to the target location. Stone Remnants have no vision and are invulnerable, and can be used with Earth Spirit's abilities.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Earth Spirit/skill5.png">
              <div class="carousel-caption">
                <h3>Magnetize</h3>
                <p>Magnetizes units in a small nearby area, causing them to take damage for a short duration.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myEarthSpirit" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myEarthSpirit" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myESS">
    <img src="img/Earthshaker/Earthshaker.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myESS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Earthshaker)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myEs" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myEs" data-slide-to="0" class="active"></li>
              <li data-target="#myEs" data-slide-to="1"></li>
              <li data-target="#myEs" data-slide-to="2"></li>
              <li data-target="#myEs" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Earthshaker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Fissure</h3>
                    <p>Slams the ground with a mighty totem, creating an impassable ridge of stone while stunning and damaging enemy units along its line.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Earthshaker/skill2.png">
              <div class="carousel-caption">
                <h3>Enchant Totem</h3>
                <p>Empowers Earthshaker's totem, causing it to deal extra damage on the next attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Earthshaker/skill3.png">
              <div class="carousel-caption">
                <h3>Aftershock</h3>
                <p>Causes the earth to shake underfoot, adding additional damage and stuns to nearby enemy units when Earthshaker casts his abilities.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Earthshaker/skill4.png">
              <div class="carousel-caption">
                <h3>Echo Slam</h3>
                <p>Shockwaves travel through the ground, damaging enemy units. Each enemy hit causes an echo to damage nearby units. Real heroes cause two echoes.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myEs" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myEs" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myETS">
    <img src="img/Elder Titan/ElderTitan.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myETS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Elder Titan)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myEtt" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myEtt" data-slide-to="0" class="active"></li>
              <li data-target="#myEtt" data-slide-to="1"></li>
              <li data-target="#myEtt" data-slide-to="2"></li>
              <li data-target="#myEtt" data-slide-to="3"></li> 
              <li data-target="#myEtt" data-slide-to="4"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Elder Titan/skill1.png">
                  <div class="carousel-caption">
                    <h3>Echo Stomp</h3>
                    <p>Elder Titan and his Astral Spirit both stomp the ground, damaging and knocking nearby enemy units unconscious around their locations.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Elder Titan/skill2.png">
              <div class="carousel-caption">
                <h3>Astral Spirit</h3>
                <p>Elder Titan sends forth his Astral Spirit, damaging any units it passes through. When the spirit rejoins the Titan, it grants bonus damage and movement speed for each unit it damaged.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Elder Titan/skill3.png">
              <div class="carousel-caption">
                <h3>Return Astral Spirit</h3>
                <p>Returns the Astral Spirit to Elder Titan.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Elder Titan/skill4.png">
              <div class="carousel-caption">
                <h3>Natural Order</h3>
                <p>Reduces all elements to their basic levels, removing base armor and magic damage resistance from nearby enemy units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Elder Titan/skill5.png">
              <div class="carousel-caption">
                <h3>Earth Splitter</h3>
                <p>Sends forth a jagged crack in front of Elder Titan. After 3 seconds, the crack implodes, slowing movement while dealing damage to each enemy based on their maximum life.</p>
              </div>
            </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myEtt" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myEtt" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myHUSS">
    <img src="img/Huskar/Huskar.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myHUSS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Huskar)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myHUS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myHUS" data-slide-to="0" class="active"></li>
              <li data-target="#myHUS" data-slide-to="1"></li>
              <li data-target="#myHUS" data-slide-to="2"></li>
              <li data-target="#myHUS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Huskar/skill1.png">
                  <div class="carousel-caption">
                    <h3>Inner Vitality</h3>
                    <p>Unlocks the regenerative power of a friendly unit, with healing based upon its primary attribute.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Huskar/skill2.png">
              <div class="carousel-caption">
                <h3>Burning Spear</h3>
                <p>Huskar sets his spears aflame, dealing damage over time with his regular attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Huskar/skill3.png">
              <div class="carousel-caption">
                <h3>Berserker's Blood</h3>
                <p>Huskar's injuries feed his power, giving increased attack speed and magic damage resistance based on missing health.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Dragon Knight/skill4.png">
              <div class="carousel-caption">
                <h3>Life Break</h3>
                <p>Huskar draws upon his health to break an enemy's life.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myHUS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myHUS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myIOO">
    <img src="img/Io/Io.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myIOO">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Io)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myIo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myIo" data-slide-to="0" class="active"></li>
              <li data-target="#myIo" data-slide-to="1"></li>
              <li data-target="#myIo" data-slide-to="2"></li>
              <li data-target="#myIo" data-slide-to="3"></li>
              <li data-target="#myIo" data-slide-to="4"></li> 
              <li data-target="#myIo" data-slide-to="5"></li>         
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Io/skill1.png">
                  <div class="carousel-caption">
                    <h3>Tether</h3>
                    <p>Tethers Io to an allied unit, granting bonus movement speed to both.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Io/skill2.png">
              <div class="carousel-caption">
                <h3>Break Tether</h3>
                <p>Break the link to the tethered unit.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Io/skill3.png">
              <div class="carousel-caption">
                <h3>Spirits</h3>
                <p>Summon five particle spirits that dance in a circle around Io. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Io/skill4.png">
              <div class="carousel-caption">
                <h3>Spirits Movement</h3>
                <p>Calls the spirits in and out.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Io/skill5.png">
              <div class="carousel-caption">
                <h3>Overcharge</h3>
                <p>Io gains bonus attack speed and damage reduction.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Io/skill6.png">
              <div class="carousel-caption">
                <h3>Relocate</h3>
                <p>ITeleports Io and any tethered ally to any location.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myIo" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myIo" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>   





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myKUN">
    <img src="img/Kunkka/Kunkka.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myKUN">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Kunkka)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myKUNK" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myKUNK" data-slide-to="0" class="active"></li>
              <li data-target="#myKUNK" data-slide-to="1"></li>
              <li data-target="#myKUNK" data-slide-to="2"></li>
              <li data-target="#myKUNK" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Kunkka/skill1.png">
                  <div class="carousel-caption">
                    <h3>Torrent</h3>
                    <p>Summons a rising torrent that, after a short delay, hurls enemy units into the sky.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Kunkka/skill2.png">
              <div class="carousel-caption">
                <h3>Tidebringer</h3>
                <p>Kunkka's legendary sword grants increased damage and cleaves a large area of effect in front of him for a single strike.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Kunkka/skill3.png">
              <div class="carousel-caption">
                <h3>X Marks the Spotss</h3>
                <p>Targets a friendly or enemy Hero, marks their position with an X.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Kunkka/skill4.png">
              <div class="carousel-caption">
                <h3>Ghostship</h3>
                <p>Summons a ghostly ship that sails through the battle before smashing apart, damaging and stunning all enemies caught near the wreckage.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myKUNK" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myKUNK" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLCS">
    <img src="img/Legion Commander/Legioncommander.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myLCS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Legion Commander)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLC" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLC" data-slide-to="0" class="active"></li>
              <li data-target="#myLC" data-slide-to="1"></li>
              <li data-target="#myLC" data-slide-to="2"></li>
              <li data-target="#myLC" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Legion Commander/skill1.png">
                  <div class="carousel-caption">
                    <h3>Overwhelming Odds</h3>
                    <p>Turns the enemies' numbers against them, dealing damage and granting you bonus movement speed per unit or per hero.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Legion Commander/skill2.png">
              <div class="carousel-caption">
                <h3>Press the Attack</h3>
                <p>Removes debuffs and disables from the target friendly unit, and grants bonus attack speed and health regen for a short time.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Legion Commander/skill3.png">
              <div class="carousel-caption">
                <h3>Moment of Courage</h3>
                <p>When attacked, Legion Commander has a chance to immediately counterattack with bonus lifesteal.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Legion Commander/skill4.png">
              <div class="carousel-caption">
                <h3>Duel</h3>
                <p>Dragon Knight takes the form of one of three powerful elder dragons, increasing his speed, and Dragon Tail's range, while granting him new powers.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLC" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLC" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLSS">
    <img src="img/Lifestealer/Lifestealer.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myLSS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lifestealer)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLS" data-slide-to="0" class="active"></li>
              <li data-target="#myLS" data-slide-to="1"></li>
              <li data-target="#myLS" data-slide-to="2"></li>
              <li data-target="#myLS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lifestealer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Rage</h3>
                    <p>Launch into a maddened rage, becoming Spell Immune, 100% resistant to magic damage, and gaining increased attack speed..</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lifestealer/skill2.png">
              <div class="carousel-caption">
                <h3>Feast</h3>
                <p>Lifestealer's attacks damage enemies and heal himself for a percentage of his target's current health.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lifestealer/skill3.png">
              <div class="carousel-caption">
                <h3>Open Wounds</h3>
                <p>Lifestealer rends an enemy unit, slowing the victim's movement speed and allowing all allies to regain health for a percentage of the damage they deal to that unit.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lifestealer/skill4.png">
              <div class="carousel-caption">
                <h3>Infest</h3>
                <p>Lifestealer infests the body of a target unit, becoming undetectable inside</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLYY">
    <img src="img/Lycan/Lycan.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myLYY">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lycan)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLY" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLY" data-slide-to="0" class="active"></li>
              <li data-target="#myLY" data-slide-to="1"></li>
              <li data-target="#myLY" data-slide-to="2"></li>
              <li data-target="#myLY" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lycan/skill1.png">
                  <div class="carousel-caption">
                    <h3>Summon Wolves</h3>
                    <p>Summons two wolves to fight for Lycan. Level 3-4 wolves have Cripple, and level 4 wolves have permanent invisibility.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lycan/skill2.png">
              <div class="carousel-caption">
                <h3>Howl</h3>
                <p>Grants bonus damage and bonus health to Lycan, all allied heroes and all units under their control. Howl has double effect during night.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lycan/skill3.png">
              <div class="carousel-caption">
                <h3>Feral Impulse</h3>
                <p>Increases the HP regeneration and damage of Lycan and all units under his control./p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lycan/skill4.png">
              <div class="carousel-caption">
                <h3>Shapeshift</h3>
                <p>Lycan assumes his lupine form, granting him and his units critical strikes and added vision at night.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLY" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLY" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myMAGG">
    <img src="img/Magnus/Magnus.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myMAGG">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Magnus)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myMAG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myMAG" data-slide-to="0" class="active"></li>
              <li data-target="#myMAG" data-slide-to="1"></li>
              <li data-target="#myMAG" data-slide-to="2"></li>
              <li data-target="#myMAG" data-slide-to="3"></li>                      
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Magnus/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shockwave</h3>
                    <p>Magnus sends out a wave of force, damaging enemy units in a line.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Magnus/skill2.png">
              <div class="carousel-caption">
                <h3>Empower</h3>
                <p>Gives an allied unit bonus damage and cleave on attack</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Magnus/skill3.png">
              <div class="carousel-caption">
                <h3>Skewer</h3>
                <p>Magnus rushes forward, goring enemy units on his massive tusk. Heroes hit on the way will be dragged to the destination, then damaged and slowed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Magnus/skill4.png">
              <div class="carousel-caption">
                <h3>Reverse Polarity</h3>
                <p>Magnus changes properties of matter, sucking all nearby enemies in front of him and stunning them with a powerful slam and dealing damage..</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myMAG" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myMAG" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNSS">
    <img src="img/Night Stalker/Nightstalker.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myNSS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Night Stalker)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNS" data-slide-to="0" class="active"></li>
              <li data-target="#myNS" data-slide-to="1"></li>
              <li data-target="#myNS" data-slide-to="2"></li>
              <li data-target="#myNS" data-slide-to="3"></li>                   
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Night Stalker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Void</h3>
                    <p>Creates a damaging void that slows an enemy unit and deals damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Night Stalker/skill2.png">
              <div class="carousel-caption">
                <h3>Crippling Fear</h3>
                <p>Night Stalker horrifies the target enemy Hero, causing it to miss attacks and become silenced. The effect lasts longer at night..</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Night Stalker/skill3.png">
              <div class="carousel-caption">
                <h3>Hunter in the Night</h3>
                <p>Night Stalker is in his element at night, attacking and moving with great swiftness.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Night Stalker/skill4.png">
              <div class="carousel-caption">
                <h3>Darkness</h3>
                <p>Night Stalker smothers the sun and summons instant darkness,</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myOMNI">
    <img src="img/Omniknight/OmniKnight.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myOMNI">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Omniknight)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myOMN" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myOMN" data-slide-to="0" class="active"></li>
              <li data-target="#myOMN" data-slide-to="1"></li>
              <li data-target="#myOMN" data-slide-to="2"></li>
              <li data-target="#myOMN" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Omniknight/skill1.png">
                  <div class="carousel-caption">
                    <h3>Purification</h3>
                    <p>Instantly heals a friendly unit and damages all nearby enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Omniknight/skill2.png">
              <div class="carousel-caption">
                <h3>Repel</h3>
                <p>Creates a divine barrier around an ally which grants them Spell Immunity and 100% resistance to Magic Damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Omniknight/skill3.png">
              <div class="carousel-caption">
                <h3>Degen Aura</h3>
                <p>Greatly degenerates the movement and attack capabilities of enemy units that stray too near.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Omniknight/skill4.png">
              <div class="carousel-caption">
                <h3>Guardian Angel</h3>
                <p>Omniknight summons a Guardian Angel that grants immunity from physical damage</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myOMN" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myOMN" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPHH">
    <img src="img/Phoenix/Phoenix.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPHH">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Phoenix)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPH" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPH" data-slide-to="0" class="active"></li>
              <li data-target="#myPH" data-slide-to="1"></li>
              <li data-target="#myPH" data-slide-to="2"></li>
              <li data-target="#myPH" data-slide-to="3"></li> 
              <li data-target="#myPH" data-slide-to="4"></li>   
              <li data-target="#myPH" data-slide-to="5"></li>          
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Phoenix/skill1.png">
                  <div class="carousel-caption">
                    <h3>Icarus Drive</h3>
                    <p>Phoenix dives forward in an arc with a fixed distance in the targeted direction.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Phoenix/skill2.png">
              <div class="carousel-caption">
                <h3>Stop Icarus Drive </h3>
                <p>Immediately cancels the dive.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phoenix/skill3.png">
              <div class="carousel-caption">
                <h3>Fire Spirits</h3>
                <p>Summons 4 fire spirits that circle around Phoenix.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phoenix/skill4.png">
              <div class="carousel-caption">
                <h3>Launch Fire Spirit</h3>
                <p>Each fire spirit can be launched independently at a targeted area of effect.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phoenix/skill5.png">
              <div class="carousel-caption">
                <h3>Sun Ray</h3>
                <p>Phoenix expels a beam of light at the cost of its own health.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phoenix/skill6.png">
              <div class="carousel-caption">
                <h3>Supernova</h3>
                <p>The Phoenix willingly ends its current life for the chance to be reborn.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPH" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPH" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPUDG">
    <img src="img/Pudge/Pudge.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPUDG">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Pudge)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPUDGE" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPUDGE" data-slide-to="0" class="active"></li>
              <li data-target="#myPUDGE" data-slide-to="1"></li>
              <li data-target="#myPUDGE" data-slide-to="2"></li>
              <li data-target="#myPUDGE" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Pudge/skill1.png">
                  <div class="carousel-caption">
                    <h3>Meat Hook</h3>
                    <p>Launches a bloody hook toward a unit or location. </p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Pudge/skill2.png">
              <div class="carousel-caption">
                <h3>Rot</h3>
                <p>A toxic cloud that deals intense damage and slows movement--harming not only enemy units but Pudge himself.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pudge/skill3.png">
              <div class="carousel-caption">
                <h3>Flesh Heap</h3>
                <p>Gives Pudge resistance to magic damage, as well as bonus strength that increases each time Pudge kills an enemy Hero or it dies in his vicinity.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pudge/skill4.png">
              <div class="carousel-caption">
                <h3>Dismember</h3>
                <p>Pudge chows down on an enemy unit, disabling it and dealing damage over time.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPUDGE" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPUDGE" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 





<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySKS">
    <img src="img/Sand King/Sand King.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySKS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Sand King)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySKK" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySKK" data-slide-to="0" class="active"></li>
              <li data-target="#mySKK" data-slide-to="1"></li>
              <li data-target="#mySKK" data-slide-to="2"></li>
              <li data-target="#mySKK" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Sand King/skill1.png">
                  <div class="carousel-caption">
                    <h3>Burrowstrike</h3>
                    <p>Sand King burrows into the ground and tunnels forward, damaging and stunning enemy units above him as he resurfaces.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Sand King/skill2.png">
              <div class="carousel-caption">
                <h3>Sand Storm</h3>
                <p>Sand King creates a fearsome sandstorm that damages enemy units while hiding him from vision.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sand King/skill3.png">
              <div class="carousel-caption">
                <h3>Caustic Finale</h3>
                <p>Sand King's attacks inject a venom that causes enemy units to violently explode when its timer expires.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sand King/skill4.png">
              <div class="carousel-caption">
                <h3>Epicenter</h3>
                <p>After channeling for 2 seconds, Sand King sends a disturbance into the earth.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySKK" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySKK" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySLAR">
    <img src="img/Slardar/Slardar.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySLAR">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Slardar)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDOG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDOG" data-slide-to="0" class="active"></li>
              <li data-target="#myDOG" data-slide-to="1"></li>
              <li data-target="#myDOG" data-slide-to="2"></li>
              <li data-target="#myDOG" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Slardar/skill1.png">
                  <div class="carousel-caption">
                    <h3>Guardian Sprint</h3>
                    <p>Slardar slithers ahead, moving significantly faster and passing through units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Slardar/skill2.png">
              <div class="carousel-caption">
                <h3>Slithereen Crush</h3>
                <p>Slams the ground, stunning and damaging nearby enemy land units. After the stun, the affected units are slowed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Slardar/skill3.png">
              <div class="carousel-caption">
                <h3>Bash of the Deep</h3>
                <p>Grants a chance that an attack will do bonus damage and stun an enemy. The duration is doubled against creeps.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Slardar/skill4.png">
              <div class="carousel-caption">
                <h3>Corrosive Haze</h3>
                <p>educes enemy armor to amplify physical damage and provides True Sight of the targeted unit, revealing invisibility.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDOG" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDOG" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySBS">
    <img src="img/Spirit Breaker/Spiritbreaker.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySBS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Spirit Breaker)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySB" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySB" data-slide-to="0" class="active"></li>
              <li data-target="#mySB" data-slide-to="1"></li>
              <li data-target="#mySB" data-slide-to="2"></li>
              <li data-target="#mySB" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Spirit Breaker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Charge of Darkness</h3>
                    <p>Spirit Breaker fixes his sight on an enemy unit and starts charging through all objects.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Spirit Breaker/skill2.png">
              <div class="carousel-caption">
                <h3>Empowering Haste</h3>
                <p>Causes Spirit Breaker to gain power with higher movement speed. His presence increases the movement speed of nearby allied units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Spirit Breaker/skill3.png">
              <div class="carousel-caption">
                <h3>Greater Bash</h3>
                <p>Gives a chance to stun and knockback an enemy unit on an attack, as well as gaining bonus movement speed after a bash occurs. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Spirit Breaker/skill4.png">
              <div class="carousel-caption">
                <h3>Nether Strike</h3>
                <p>Spirit Breaker slips into the nether realm, reappearing next to his hapless victim. </p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySB" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySB" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySV">
    <img src="img/Sven/Sven.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySV">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Sven)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySVS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySVS" data-slide-to="0" class="active"></li>
              <li data-target="#mySVS" data-slide-to="1"></li>
              <li data-target="#mySVS" data-slide-to="2"></li>
              <li data-target="#mySVS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Sven/skill1.png">
                  <div class="carousel-caption">
                    <h3>Storm Hammer</h3>
                    <p>Sven unleashes his magical gauntlet that deals damage and stuns enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Sven/skill2.png">
              <div class="carousel-caption">
                <h3>Great Cleave</h3>
                <p>Sven strikes with great force, cleaving all nearby enemy units with his attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sven/skill3.png">
              <div class="carousel-caption">
                <h3>Warcry</h3>
                <p>Sven's Warcry heartens his allies for battle, increasing their movement speed and armor. Lasts 8 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sven/skill4.png">
              <div class="carousel-caption">
                <h3>God's Strength</h3>
                <p>Sven channels his rogue strength, granting bonus damage for 25 seconds.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySVS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySVS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTHH">
    <img src="img/Tidehunter/Tidehunter.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTHH">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Tidehunter)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTH" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTH" data-slide-to="0" class="active"></li>
              <li data-target="#myTH" data-slide-to="1"></li>
              <li data-target="#myTH" data-slide-to="2"></li>
              <li data-target="#myTH" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Tidehunter/skill1.png">
                  <div class="carousel-caption">
                    <h3>Gush</h3>
                    <p>Summons a gush of water to damage an enemy unit, reducing their movement speed and armor. Lasts 4 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Tidehunter/skill2.png">
              <div class="carousel-caption">
                <h3>Kraken Shell</h3>
                <p>Thickens Tidehunter's hide to passively block a portion of any incoming physical attack damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tidehunter/skill3.png">
              <div class="carousel-caption">
                <h3>Anchor Smash</h3>
                <p>Tidehunter swings his mighty anchor to damage nearby enemies and reduce their attack damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tidehunter/skill4.png">
              <div class="carousel-caption">
                <h3>Ravage</h3>
                <p>Slams the ground, causing tentacles to erupt in all directions, damaging and stunning all nearby enemy units.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTH" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTH" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTS">
    <img src="img/Timbersaw/Timbersaw.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Timbersaw)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTSS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTSS" data-slide-to="0" class="active"></li>
              <li data-target="#myTSS" data-slide-to="1"></li>
              <li data-target="#myTSS" data-slide-to="2"></li>
              <li data-target="#myTSS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Timbersaw/skill1.png">
                  <div class="carousel-caption">
                    <h3>Whirling Death</h3>
                    <p>STimbersaw whirls extremely sharp edges, damaging enemies and destroying trees around him in an area.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Timbersaw/skill2.png">
              <div class="carousel-caption">
                <h3>Timber Chain</h3>
                <p>Timbersaw fires a chain that embeds itself in the first tree it hits, pulling him towards it. Any enemy in the path takes damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Timbersaw/skill3.png">
              <div class="carousel-caption">
                <h3>Reactive Armor</h3>
                <p>Each time Timbersaw is attacked, he gains increased health regen and armor.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Timbersaw/skill4.png">
              <div class="carousel-caption">
                <h3>Chakram</h3>
                <p>Fires your main saw blade at the target location where it will spin in place, dealing damage in an area around it.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTSS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTSS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTY">
    <img src="img/Tiny/Tiny.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTY">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Tiny)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTYY" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTYY" data-slide-to="0" class="active"></li>
              <li data-target="#myTYY" data-slide-to="1"></li>
              <li data-target="#myTYY" data-slide-to="2"></li>
              <li data-target="#myTYY" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Tiny/skill1.png">
                  <div class="carousel-caption">
                    <h3>Avalanche</h3>
                    <p>Bombards an area with rocks, stunning and damaging enemy land units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Tiny/skill2.png">
              <div class="carousel-caption">
                <h3>Toss</h3>
                <p>Grabs the nearest unit in a 275 radius around Tiny, ally or enemy, and launches it at the target unit or rune to deal damage where they land.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tiny/skill3.png">
              <div class="carousel-caption">
                <h3>Tree Grab</h3>
                <p>Grabs a tree to whack enemies on the head for a limited number of times. Grants bonus attack range. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tiny/skill4.png">
              <div class="carousel-caption">
                <h3>Grow</h3>
                <p>Tiny gains craggy mass, increases his power and causes him to shrug off debuffs.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTYY" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTYY" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTP">
    <img src="img/Treant Protector/Treantprotector.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTP">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Treant Protector)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTPP" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTPP" data-slide-to="0" class="active"></li>
              <li data-target="#myTPP" data-slide-to="1"></li>
              <li data-target="#myTPP" data-slide-to="2"></li>
              <li data-target="#myTPP" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Treant Protector/skill1.png">
                  <div class="carousel-caption">
                    <h3>Nature's Guise</h3>
                    <p>Turns Treant invisible after a short delay when he is within close radius of a tree.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Treant Protector/skill2.png">
              <div class="carousel-caption">
                <h3>Leech Seed</h3>
                <p>Treant plants a life-sapping seed in an enemy unit, draining its health, while simultaneously slowing it.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Treant Protector/skill3.png">
              <div class="carousel-caption">
                <h3>Living Armor</h3>
                <p>Infuses the target hero or structure with a protective coating which grants bonus regeneration. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Treant Protector/skill4.png">
              <div class="carousel-caption">
                <h3>Growth</h3>
                <p>Summons an overgrowth of vines and branches around Treant that prevent afflicted enemies from moving, blinking, going invisible, or attacking.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTPP" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTPP" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTUS">
    <img src="img/Tuskar/Tuskar.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTUS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Tuskar)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTUSS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTUSS" data-slide-to="0" class="active"></li>
              <li data-target="#myTUSS" data-slide-to="1"></li>
              <li data-target="#myTUSS" data-slide-to="2"></li>
              <li data-target="#myTUSS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Tuskar/skill1.png">
                  <div class="carousel-caption">
                    <h3>Ice Shards</h3>
                    <p>Tusk compresses shards of ice into a ball of frozen energy that damages all enemies it comes in contact with.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Tuskar/skill2.png">
              <div class="carousel-caption">
                <h3>Snowball</h3>
                <p>Tusk begins rolling into a snowball. Allies within a 350 radius can also be added to the snowball by right-clicking on them.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tuskar/skill3.png">
              <div class="carousel-caption">
                <h3>Frozen Sigil</h3>
                <p>Tusk summons a Frozen Sigil by calling upon the deepest cold of winter. The Sigil creates a snowstorm which slows all enemy units within 600 range.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tidehunter/skill4.png">
              <div class="carousel-caption">
                <h3>Walrus PUNCH!</h3>
                <p>STusk connects with his mighty Walrus Punch, a critical strike so powerful it launches its victim into the air. The victim is slowed upon landing.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTUSS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTUSS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myUDD">
    <img src="img/Underlord/Underlord.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myUDD">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Underlord)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myUD" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myUD" data-slide-to="0" class="active"></li>
              <li data-target="#myUD" data-slide-to="1"></li>
              <li data-target="#myUD" data-slide-to="2"></li>
              <li data-target="#myUD" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Underlord/skill1.png">
                  <div class="carousel-caption">
                    <h3>Firestorm</h3>
                    <p>Calls down waves of fire that damage enemy units in the target area, burning for additional damage over time.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Underlord/skill2.png">
              <div class="carousel-caption">
                <h3>Pit of Malice</h3>
                <p>A deadly pit is conjured at the target location; any unit that enters will be rooted. Each enemy unit within the pit are affected every 3.6 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Underlord/skill3.png">
              <div class="carousel-caption">
                <h3>Atrophy Aura</h3>
                <p>Nearby enemy units are weakened, losing a portion of their base damage. If a unit dies while under this effect, Underlord gains bonus damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Underlord/skill4.png">
              <div class="carousel-caption">
                <h3>Dark Rift</h3>
                <p>Opens a dark rift at the targeted friendly unit's position. After a short delay, Underlord and all nearby friendly heroes are teleported to that unit's location</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myUD" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myUD" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNL">
    <img src="img/Undying/Undying.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myNL">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Undying)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNLL" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNLL" data-slide-to="0" class="active"></li>
              <li data-target="#myNLL" data-slide-to="1"></li>
              <li data-target="#myNLL" data-slide-to="2"></li>
              <li data-target="#myNLL" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Undying/skill1.png">
                  <div class="carousel-caption">
                    <h3>Decay</h3>
                    <p>Undying steals strength from all enemy heroes in an area, dealing base damage as he claims the enemy's strength for himself.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Undying/skill2.png">
              <div class="carousel-caption">
                <h3>Soul Rip</h3>
                <p>Undying rips health away from all nearby units and uses it to heal an ally, or damage an enemy. Soul Rip can also be used to heal Tombstone.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Undying/skill3.png">
              <div class="carousel-caption">
                <h3>Tombstone</h3>
                <p>Summons a tombstone at the target point. Zombies will frequently spawn next to every enemy unit in the area around the Tombstone, and attack them. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Undying/skill4.png">
              <div class="carousel-caption">
                <h3>Flesh Golem</h3>
                <p>Undying transforms into a horrifying flesh golem that possesses a Plague Aura. This aura slows all enemy units within 750 range and amplifies the damage they take.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNLL" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNLL" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTHH">
    <img src="img/Tidehunter/Tidehunter.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTHH">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Tidehunter)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTH" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTH" data-slide-to="0" class="active"></li>
              <li data-target="#myTH" data-slide-to="1"></li>
              <li data-target="#myTH" data-slide-to="2"></li>
              <li data-target="#myTH" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Tidehunter/skill1.png">
                  <div class="carousel-caption">
                    <h3>Gush</h3>
                    <p>Summons a gush of water to damage an enemy unit, reducing their movement speed and armor. Lasts 4 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Tidehunter/skill2.png">
              <div class="carousel-caption">
                <h3>Kraken Shell</h3>
                <p>Thickens Tidehunter's hide to passively block a portion of any incoming physical attack damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tidehunter/skill3.png">
              <div class="carousel-caption">
                <h3>Anchor Smash</h3>
                <p>Tidehunter swings his mighty anchor to damage nearby enemies and reduce their attack damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tidehunter/skill4.png">
              <div class="carousel-caption">
                <h3>Ravage</h3>
                <p>Slams the ground, causing tentacles to erupt in all directions, damaging and stunning all nearby enemy units.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTH" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTH" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

 

  
  <h2>Agility</h2>
  <div class="row">
  </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myAM">
    <img src="img/Anti-Mage/am.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myAM">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Anti-Mage)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myAMM" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myAMM" data-slide-to="0" class="active"></li>
              <li data-target="#myAMM" data-slide-to="1"></li>
              <li data-target="#myAMM" data-slide-to="2"></li>
              <li data-target="#myAMM" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Anti-Mage/skill1.png">
                  <div class="carousel-caption">
                    <h3>Mana Break</h3>
                    <p>Burns an opponent's mana on each attack. Mana Break deals 50% of the mana burned as damage to the target.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Anti-Mage/skill2.png">
              <div class="carousel-caption">
                <h3>Blink</h3>
                <p>Short distance teleportation that allows Anti-Mage to move in and out of combat.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Anti-Mage/skill3.png">
              <div class="carousel-caption">
                <h3>Spell Shield</h3>
                <p>Increases Anti-Mage's resistance to magic damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Anti-Mage/skill4.png">
              <div class="carousel-caption">
                <h3>Mana Void</h3>
                <p>For each point of mana missing by the target unit, damage is dealt to it and surrounding enemies. The main target is also mini-stunned.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myAMM" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myAMM" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myARC">
    <img src="img/Arc Warden/AW.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myARC">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Arc Warden)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myARCC" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myARCC" data-slide-to="0" class="active"></li>
              <li data-target="#myARCC" data-slide-to="1"></li>
              <li data-target="#myARCC" data-slide-to="2"></li>
              <li data-target="#myARCC" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Arc Warden/skill1.png">
                  <div class="carousel-caption">
                    <h3>Flux</h3>
                    <p>Infuses a lone enemy unit with swirling, volatile energy, slowing its movement speed and dealing damage over time. </p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Arc Warden/skill2.png">
              <div class="carousel-caption">
                <h3>Magnetic Field</h3>
                <p>Generates a circular distortion field of magnetic energy that protects allied heroes and buildings within it by evading attacks coming from outside the field.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Arc Warden/skill3.png">
              <div class="carousel-caption">
                <h3>Spell Shield</h3>
                <p>Summons a Spark Wraith that slowly materializes and patrols a targeted area until an enemy comes within its range.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Arc Warden/skill4.png">
              <div class="carousel-caption">
                <h3>Tempest Double</h3>
                <p>Briefly refocusing its fractured elements into a single form, the Arc Warden is able to create a perfect electrical duplication of itself.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myARCC" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myARCC" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBS">
    <img src="img/Bloodseeker/Blood.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Bloodseeker)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBSS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBSS" data-slide-to="0" class="active"></li>
              <li data-target="#myBSS" data-slide-to="1"></li>
              <li data-target="#myBSS" data-slide-to="2"></li>
              <li data-target="#myBSS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Bloodseeker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Bloodrage</h3>
                    <p>Drives a unit into a bloodthirsty rage during which a unit deals, and takes, increased damage. Units affected by Bloodrage will be healed for a percentage of the max health of any units they kill.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Bloodseeker/skill2.png">
              <div class="carousel-caption">
                <h3>Blood Rite</h3>
                <p>Bloodseeker baptizes an area in sacred blood. After 2.9 seconds the ritual completes, causing any enemies caught in the area to take damage and become silenced.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bloodseeker/skill3.png">
              <div class="carousel-caption">
                <h3>Thirst</h3>
                <p>Bloodseeker is invigorated by the wounds of his enemies, gaining bonus movement speed and attack damage whenever an enemy hero's health falls below 75%.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bloodseeker/skill4.png">
              <div class="carousel-caption">
                <h3>Rupture</h3>
                <p>Causes an enemy unit's skin to rupture. If the unit moves, it takes a percentage of the distance traveled as damage. The damage is dealt through spell immunity.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBSS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBSS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBH">
    <img src="img/Bounty Hunter/Bounty.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBH">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Bounty Hunter)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBHH" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBHH" data-slide-to="0" class="active"></li>
              <li data-target="#myBHH" data-slide-to="1"></li>
              <li data-target="#myBHH" data-slide-to="2"></li>
              <li data-target="#myBHH" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Bounty Hunter/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shuriken Toss</h3>
                    <p>Hurls a deadly shuriken at an enemy unit, dealing damage and mini-stunning the target. The shuriken will bounce between any Tracked units who are within a 1200 radius of each other.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Bounty Hunter/skill2.png">
              <div class="carousel-caption">
                <h3>Jinada</h3>
                <p>Bounty Hunter plans his next hit, passively adding a critical strike and maim to his next attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bounty Hunter/skill3.png">
              <div class="carousel-caption">
                <h3>Shadow Walk</h3>
                <p>Bounty Hunter becomes invisible and gains the ability to move through other units until he attacks or uses an ability.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bounty Hunter/skill4.png">
              <div class="carousel-caption">
                <h3>Track</h3>
                <p>Tracks an enemy hero, granting True Sight of the target, and information on how much gold it is carrying.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBHH" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBHH" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBM">
    <img src="img/Broodmother/Brood.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myBM">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Broodmother)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBMM" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBMM" data-slide-to="0" class="active"></li>
              <li data-target="#myBMM" data-slide-to="1"></li>
              <li data-target="#myBMM" data-slide-to="2"></li>
              <li data-target="#myBMM" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Broodmother/skill1.png">
                  <div class="carousel-caption">
                    <h3>Spawn Spiderlings</h3>
                    <p>Broodmother injects her young into an enemy unit, dealing damage. The spiderlings will hatch if the target is killed while under this influence.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Broodmother/skill2.png">
              <div class="carousel-caption">
                <h3>Spin Web</h3>
                <p>Spins a large web that grants Broodmother a passive movement speed increase, gives free movement, and boosts regeneration while in its vicinity. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Broodmother/skill3.png">
              <div class="carousel-caption">
                <h3>Incapacitating Bite</h3>
                <p>IBroodmother's venom cripples enemy units, causing her attacks to slow and giving the affected unit a chance to miss its attacks.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Broodmother/skill4.png">
              <div class="carousel-caption">
                <h3>Insatiable Hunger</h3>
                <p>A violent lust for vital fluids increases Broodmother's attack damage and gives her a vampiric attack.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBMM" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBMM" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCZ">
    <img src="img/Clinkz/Clinkz.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myCZ">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Clinkz)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myCZZ" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCZZ" data-slide-to="0" class="active"></li>
              <li data-target="#myCZZ" data-slide-to="1"></li>
              <li data-target="#myCZZ" data-slide-to="2"></li>
              <li data-target="#myCZZ" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Clinkz/skill1.png">
                  <div class="carousel-caption">
                    <h3>Strafe</h3>
                    <p>Clinkz nimbly attacks with a barrage of arrows. Dramatically increases attack speed for a short time and grants Clinkz the ability to automatically dodge projectiles.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Clinkz/skill2.png">
              <div class="carousel-caption">
                <h3>Searing Arrows</h3>
                <p>Imbues Clinkz's arrows with fire for extra damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Clinkz/skill3.png">
              <div class="carousel-caption">
                <h3>Skeleton Walk</h3>
                <p>Clinkz moves invisibly through units until the moment he attacks or uses an ability.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Clinkz/skill4.png">
              <div class="carousel-caption">
                <h3>Death Pact</h3>
                <p>Clinkz consumes the target friendly or enemy creep, gaining a percent of its hit points as max health and damage.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCZZ" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCZZ" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDR">
    <img src="img/Drow Ranger/Drow.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myAM">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Drow Ranger)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDRR" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDRR" data-slide-to="0" class="active"></li>
              <li data-target="#myDRR" data-slide-to="1"></li>
              <li data-target="#myDRR" data-slide-to="2"></li>
              <li data-target="#myDRR" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Drow Ranger/skill1.png">
                  <div class="carousel-caption">
                    <h3>Frost Arrows</h3>
                    <p>Adds a freezing effect to Drow's attacks, slowing enemy movement. Lasts 1.5 seconds on Heroes, and 7 seconds on creeps.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Drow Ranger/skill2.png">
              <div class="carousel-caption">
                <h3>Gust</h3>
                <p>Releases a wave that silences and knocks back enemy units. Knockback distance is relative to how close they are to you.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Drow Ranger/skill3.png">
              <div class="carousel-caption">
                <h3>Precision Aura</h3>
                <p>Adds bonus damage to the physical attack of allied, ranged Hero units on the map based on a percentage of Drow's agility. Affects creeps for 30 seconds when cast.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Drow Ranger/skill4.png">
              <div class="carousel-caption">
                <h3>Marksmanship</h3>
                <p>Drow's experiences in battle improve her accuracy and effectiveness in combat, providing a passive bonus to Agility. Grants no bonus if there are enemy heroes within 400 range.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDRR" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDRR" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myES">
    <img src="img/Ember Spirit/ES.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myES">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Ember Spirit)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myESE" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myESE" data-slide-to="0" class="active"></li>
              <li data-target="#myESE" data-slide-to="1"></li>
              <li data-target="#myESE" data-slide-to="2"></li>
              <li data-target="#myESE" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Ember Spirit/skill1.png">
                  <div class="carousel-caption">
                    <h3>Searing Chains</h3>
                    <p>Ember Spirit unleashes fiery bolas that wrap around nearby enemies, anchoring them in place and dealing damage each second.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Ember Spirit/skill2.png">
              <div class="carousel-caption">
                <h3>Sleight of Fist</h3>
                <p>Ember Spirit dashes around with blazing speed, attacking all enemies in the targeted area of effect.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Ember Spirit/skill3.png">
              <div class="carousel-caption">
                <h3>Flame Guard</h3>
                <p>Ember Spirit surrounds himself with a ring of fire that consumes incoming magic damage, leaving him unharmed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Ember Spirit/skill4.png">
              <div class="carousel-caption">
                <h3>Fire Remnant</h3>
                <p>Ember Spirit generates Fire Remnant charges every 35 seconds, with a max of 3 charges. </p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myESE" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myESE" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myFV">
    <img src="img/Faceless Void/FV.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myFV">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Faceless Void)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myFVV" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myFVV" data-slide-to="0" class="active"></li>
              <li data-target="#myFVV" data-slide-to="1"></li>
              <li data-target="#myFVV" data-slide-to="2"></li>
              <li data-target="#myFVV" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Faceless Void/skill1.png">
                  <div class="carousel-caption">
                    <h3>Time Walk</h3>
                    <p>Rushes to a target location while backtracking any damage taken in the last 2 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Faceless Void/skill2.png">
              <div class="carousel-caption">
                <h3>Time Dilation</h3>
                <p>Faceless Void traps all nearby enemies in a time dilation field for 6/8/10/12 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Faceless Void/skill3.png">
              <div class="carousel-caption">
                <h3>Time Lock</h3>
                <p>Adds the chance for an attack to lock an enemy unit in time, stunning it and dealing bonus damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Faceless Void/skill4.png">
              <div class="carousel-caption">
                <h3>Chronosphere</h3>
                <p>Adds the chance for an attack to lock an enemy unit in time, stunning it and dealing bonus damage.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myFVV" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myFVV" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myGC">
    <img src="img/Gyrocopter/Gyro.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myGC">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Gyrocopter)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myGCC" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myGCC" data-slide-to="0" class="active"></li>
              <li data-target="#myGCC" data-slide-to="1"></li>
              <li data-target="#myGCC" data-slide-to="2"></li>
              <li data-target="#myGCC" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Gyrocopter/skill1.png">
                  <div class="carousel-caption">
                    <h3>Rocket Barrage</h3>
                    <p>Launches a salvo of rockets at nearby enemy units in a radius around the Gyrocopter. Lasts 3 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Gyrocopter/skill2.png">
              <div class="carousel-caption">
                <h3>Homing Missle</h3>
                <p>Fires a homing missile to seek the targeted enemy unit. The missile gains speed over time, dealing damage and stunning when it impacts the target.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Gyrocopter/skill3.png">
              <div class="carousel-caption">
                <h3>Flak Cannon</h3>
                <p>Gyrocopter's attacks hit all enemy units in an area around it for a limited number of attacks. Only the main target of attacks will receive attack bonuses such as Critical Strike.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Gyrocopter/skill4.png">
              <div class="carousel-caption">
                <h3>Call Down</h3>
                <p>Call down an aerial missile strike on enemy units in a target area. Two missiles arrive in succession, the first dealing major damage and minor slow for 2 seconds.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myGCC" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myGCC" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myJUG">
    <img src="img/Juggernaut/jugg.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myJUG">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Juggernaut)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myJUGG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myJUGG" data-slide-to="0" class="active"></li>
              <li data-target="#myJUGG" data-slide-to="1"></li>
              <li data-target="#myJUGG" data-slide-to="2"></li>
              <li data-target="#myJUGG" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Juggernaut/skill1.png">
                  <div class="carousel-caption">
                    <h3>Blade Fury</h3>
                    <p>Causes a bladestorm of destructive force around Juggernaut, rendering him immune to magic and dealing damage to nearby enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Juggernaut/skill2.png">
              <div class="carousel-caption">
                <h3>Healing Ward</h3>
                <p>Summons a Healing Ward which heals all nearby allied units, based on their max health. </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Juggernaut/skill3.png">
              <div class="carousel-caption">
                <h3>Blade Dance</h3>
                <p>Gives Juggernaut a chance to deal double damage on each attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Juggernaut/skill4.png">
              <div class="carousel-caption">
                <h3>Omnislash</h3>
                <p>Juggernaut leaps towards the target enemy unit with a damaging attack, and then slashes other nearby enemy units, dealing between 200-225 damage per slash. Juggernaut is invulnerable for the duration.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myJUGG" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myJUGG" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLD">
    <img src="img/Lone Druid/LD.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myLD">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lone Druid)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLDD" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLDD" data-slide-to="0" class="active"></li>
              <li data-target="#myLDD" data-slide-to="1"></li>
              <li data-target="#myLDD" data-slide-to="2"></li>
              <li data-target="#myLDD" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lone Druid/skill1.png">
                  <div class="carousel-caption">
                    <h3>Summons Spirit Bear</h3>
                    <p>Summons a powerful Spirit Bear companion that can equip items. If the bear moves 1100 distance away from the Lone Druid, it cannot attack.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lone Druid/skill2.png">
              <div class="carousel-caption">
                <h3>Rabid</h3>
                <p>Increases the attack and movement speed of Lone Druid and the Spirit Bear.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lone Druid/skill3.png">
              <div class="carousel-caption">
                <h3>Savage Roar</h3>
                <p>Lone Druid roars fiercely causing nearby enemies to flee towards their base in terror. Their movement speed is increased by 20%.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lone Druid/skill4.png">
              <div class="carousel-caption">
                <h3>True Form</h3>
                <p>Lone Druid learns to morph himself into a raging bear, losing his ranged advantage and some base movement speed.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLDD" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLDD" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLNA">
    <img src="img/Luna/luna.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myLNA">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Luna)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLUNAA" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLUNAA" data-slide-to="0" class="active"></li>
              <li data-target="#myLUNAA" data-slide-to="1"></li>
              <li data-target="#myLUNAA" data-slide-to="2"></li>
              <li data-target="#myLUNAA" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Luna/skill1.png">
                  <div class="carousel-caption">
                    <h3>Lucent Beam</h3>
                    <p>Calls a beam of lunar energy down upon an enemy, damaging and briefly stunning them.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Luna/skill2.png">
              <div class="carousel-caption">
                <h3>Moon Glaives</h3>
                <p>Empowers Luna's glaives, causing her attacks to bounce between enemy units. Deals less damage with each bounce.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Luna/skill3.png">
              <div class="carousel-caption">
                <h3>Lunar Blessing</h3>
                <p>Increases the damage dealt by attacks from Luna and nearby allied heroes. Luna is also blessed with increased vision range at night.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Anti-Mage/skill4.png">
              <div class="carousel-caption">
                <h3>Eclipse</h3>
                <p>Showers random nearby enemies with strikes from Luna's current level of Lucent Beam. These beams do not stun their targets, and there is a maximum number of times that a single target can be struck. </p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLUNAA" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLUNAA" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDSA">
    <img src="img/Medusa/medusa.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myDSA">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Medusa)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDUSA" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDUSA" data-slide-to="0" class="active"></li>
              <li data-target="#myDUSA" data-slide-to="1"></li>
              <li data-target="#myDUSA" data-slide-to="2"></li>
              <li data-target="#myDUSA" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Medusa/skill1.png">
                  <div class="carousel-caption">
                    <h3>Split Shot</h3>
                    <p>Medusa magically splits her shot into several arrows. These arrows deal a lower percent of her normal damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Medusa/skill2.png">
              <div class="carousel-caption">
                <h3>Mystic Snake</h3>
                <p>A mystic snake made of energy jumps from target to target dealing damage and stealing mana. After it reaches its last target, it returns to Medusa to replenish her with mana.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Medusa/skill3.png">
              <div class="carousel-caption">
                <h3>Mana Shield</h3>
                <p>Creates a shield that absorbs 60% of the incoming damage in exchange for Medusa's mana.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Medusa/skill4.png">
              <div class="carousel-caption">
                <h3>Stone Gaze</h3>
                <p>Any enemy units looking at Medusa will have their movement and attack speed slowed. If 2 seconds of total time is accumulated looking at Medusa while Stone Gaze is active.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDUSA" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDUSA" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myME">
    <img src="img/Meepo/meepo.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myME">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Meepo)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myMEE" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myMEE" data-slide-to="0" class="active"></li>
              <li data-target="#myMEE" data-slide-to="1"></li>
              <li data-target="#myMEE" data-slide-to="2"></li>
              <li data-target="#myMEE" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Meepo/skill1.png">
                  <div class="carousel-caption">
                    <h3>Earthbind</h3>
                    <p>Tosses a net at the target point, pinning down all enemy units. Earthbind prevents invisibility and blink.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Meepo/skill2.png">
              <div class="carousel-caption">
                <h3>Poof</h3>
                <p>Drawing mystical energies from the earth, a Meepo can teleport to another Meepo or itself after channeling for 1.5 seconds, dealing damage in both the departure and arrival locations.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Meepo/skill3.png">
              <div class="carousel-caption">
                <h3>Geostrike</h3>
                <p>Meepo enchants his weapon to deal damage per second, as well as slow the movement speed of the attacked unit. Geostrikes from multiple Meepos stack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Meepo/skill4.png">
              <div class="carousel-caption">
                <h3></h3>
                <p>Meepo summons an imperfect, semi-autonomous duplicate of himself, which can gain gold and experience as he does and shares his experience, attributes and abilities.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myMEE" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myMEE" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPOT">
    <img src="img/Mirana/mirana.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPOT">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Mirana)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPOTM" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPOTM" data-slide-to="0" class="active"></li>
              <li data-target="#myPOTM" data-slide-to="1"></li>
              <li data-target="#myPOTM" data-slide-to="2"></li>
              <li data-target="#myPOTM" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Mirana/skill1.png">
                  <div class="carousel-caption">
                    <h3>Starstorm</h3>
                    <p>Calls down a wave of meteors to damage nearby enemy units. The closest enemy unit to Mirana in a 425 radius will be struck a second time for 75% of the damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Mirana/skill2.png">
              <div class="carousel-caption">
                <h3>Sacred Arrow</h3>
                <p>Fires a long-range arrow with deadly precision, which stuns and damages the first enemy unit it strikes. The stun duration ranges from 0.01 to 5 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Mirana/skill3.png">
              <div class="carousel-caption">
                <h3>Leap</h3>
                <p>Mirana leaps forward into battle, empowering herself with a ferocious roar that grants bonus attack and movement speed. Speed bonus lasts 2.5 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Mirana/skill4.png">
              <div class="carousel-caption">
                <h3>Moonlight Shadow</h3>
                <p>Turns Mirana and all allied heroes invisible. If a hero is revealed, invisibility will restore after the fade delay as long as Moonlight Shadow's duration has not expired.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPOTM" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPOTM" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myMK">
    <img src="img/Monkey King/monkey.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myMK">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Monkey King)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myMKK" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myMKK" data-slide-to="0" class="active"></li>
              <li data-target="#myMKK" data-slide-to="1"></li>
              <li data-target="#myMKK" data-slide-to="2"></li>
              <li data-target="#myMKK" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Monkey King/skill1.png">
                  <div class="carousel-caption">
                    <h3>Boundless Strike</h3>
                    <p>Monkey King enlarges his staff and slams it against the ground, stunning enemies in a line and damaging them with a critical hit based on his attack. Has True Strike.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Monkey King/skill2.png">
              <div class="carousel-caption">
                <h3>Tree Dance</h3>
                <p>Monkey King jumps to a tree and perches atop it. While perched, he gains the Primal Spring ability-a channeled leap attack. If Monkey King's tree is destroyed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Monkey King/skill3.png">
              <div class="carousel-caption">
                <h3>Primal Spring</h3>
                <p>Monkey King springs out from his tree perch, damaging and slowing enemies in the area where he lands. Damage and slow amounts are in proportion to channel duration..</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Monkey King/skill4.png">
              <div class="carousel-caption">
                <h3>Wukong's Command</h3>
                <p>Monkey King creates a circular formation of soldiers that spread out from his position. If Monkey King leaves the area his soldiers disperse. </p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myMKK" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myMKK" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myMM">
    <img src="img/Morphling/morphling.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myMM">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Morphling)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myMMM" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myMMM" data-slide-to="0" class="active"></li>
              <li data-target="#myMMM" data-slide-to="1"></li>
              <li data-target="#myMMM" data-slide-to="2"></li>
              <li data-target="#myMMM" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Morphling/skill1.png">
                  <div class="carousel-caption">
                    <h3>Waveform</h3>
                    <p>Morphling dissolves into liquid and surges forward, damaging enemy units in his path. Morphling is invulnerable during Waveform.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Morphling/skill2.png">
              <div class="carousel-caption">
                <h3>Adaptive Strike (Agility)</h3>
                <p>Launches a surge of water toward an enemy unit, dealing base damage plus additional damage based on Morphling's agility times a multiplier.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Morphling/skill3.png">
              <div class="carousel-caption">
                <h3>Attribute Shift (Agility Gain)</h3>
                <p>Morphling shifts its form, pulling points from Strength and pouring them into Agility. The process is reversible.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Morphling/skill4.png">
              <div class="carousel-caption">
                <h3>Morp</h3>
                <p>Morphling changes his form to match the targeted enemy, gaining their basic abilities. Can be toggled for the duration of the ability.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myMMM" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myMMM" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNAG">
    <img src="img/Naga Siren/nagasiren.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myNAG">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Naga Siren)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNAGG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNAGG" data-slide-to="0" class="active"></li>
              <li data-target="#myNAGG" data-slide-to="1"></li>
              <li data-target="#myNAGG" data-slide-to="2"></li>
              <li data-target="#myNAGG" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Naga Siren/skill1.png">
                  <div class="carousel-caption">
                    <h3>Mirror Image</h3>
                    <p>Creates multiple images of Naga Siren under her control.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Naga Siren/skill2.png">
              <div class="carousel-caption">
                <h3>Ensnare</h3>
                <p>Interrupts the target and traps them in place, preventing movement or blinking.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Naga Siren/skill3.png">
              <div class="carousel-caption">
                <h3>Rip Tide</h3>
                <p>The Naga Siren and her images hit all nearby units with a damaging wave of water that lowers armor for 8 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Naga Siren/skill4.png">
              <div class="carousel-caption">
                <h3>Song of the Siren</h3>
                <p>All enemies in range of the Naga Siren are put into a magical stasis where they cannot act or be attacked. Using Song of the Siren again will end the duration early.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNAGG" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNAGG" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNYX">
    <img src="img/Nyx Assassin/nyxassassin.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myNYX">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Nyx Assassin)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNYXX" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNYXX" data-slide-to="0" class="active"></li>
              <li data-target="#myNYXX" data-slide-to="1"></li>
              <li data-target="#myNYXX" data-slide-to="2"></li>
              <li data-target="#myNYXX" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Nyx Assassin/skill1.png">
                  <div class="carousel-caption">
                    <h3>Impale</h3>
                    <p>Rock spikes burst from the earth along a straight path. Enemy units are hurled into the air, then are stunned and take damage when they fall.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Nyx Assassin/skill2.png">
              <div class="carousel-caption">
                <h3>Mana Burn</h3>
                <p>Destroys the target hero's mana equal to a multiplier of its Intelligence, and deals damage equal to the mana burned.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Nyx Assassin/skill3.png">
              <div class="carousel-caption">
                <h3>Spiked Carapace</h3>
                <p>When activated while above ground, Spiked Carapace reflects and negates damage dealt to Nyx Assassin (max once from each source), as well as stunning the source of the damage. Activating Spiked Carapace will not break Vendetta invisibility.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Nyx Assassin/skill4.png">
              <div class="carousel-caption">
                <h3>Vendetta</h3>
                <p>Allows Nyx Assassin to become invisible and gain a speed bonus. If Nyx Assassin attacks to break the invisibility, massive bonus damage is dealt with the attack.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNYXX" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNYXX" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPG">
    <img src="img/Pangolier/Pangolier.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPG">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Pangolier)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPGG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPGG" data-slide-to="0" class="active"></li>
              <li data-target="#myPGG" data-slide-to="1"></li>
              <li data-target="#myPGG" data-slide-to="2"></li>
              <li data-target="#myPGG" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Pangolier/skill1.png">
                  <div class="carousel-caption">
                    <h3>Swashbuckle </h3>
                    <p>Vector Targeted. Pangolier dashes along the target line, then slashes all enemies in the drawn direction with several quick swipes.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Pangolier/skill2.png">
              <div class="carousel-caption">
                <h3>Shield Crash</h3>
                <p>Pangolier jumps in the air and slams back to the ground, damaging all enemies in a radius. For each enemy hero hit.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pangolier/skill3.png">
              <div class="carousel-caption">
                <h3>Heartpiercer</h3>
                <p>Pangolier reads his enemies perfectly, deftly slipping his blade past defenses. Each attack has a chance to negate enemy armor and slow the target for a duration, activating after a short delay.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pangolier/skill4.png">
              <div class="carousel-caption">
                <h3>Rolling Thunder</h3>
                <p>Pangolier curls into a magic-immune ball and rolls out. When rolling, he moves at an increased speed and can move through trees, but has a decreased ability to turn.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPGG" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPGG" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPA">
    <img src="img/Phantom Assassin/PA.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPA">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Phantom Assassin)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPAA" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPAA" data-slide-to="0" class="active"></li>
              <li data-target="#myPAA" data-slide-to="1"></li>
              <li data-target="#myPAA" data-slide-to="2"></li>
              <li data-target="#myPAA" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Phantom Assassin/skill1.png">
                  <div class="carousel-caption">
                    <h3>Stifling Dagger</h3>
                    <p>Throws a dagger slowing the enemy unit's movement speed, dealing 65+25%/40%/55%/70% of Phantom Assassin's attack damage as physical damage and applying attack effects from items and abilities.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Phantom Assassin/skill2.png">
              <div class="carousel-caption">
                <h3>Phantom Strike</h3>
                <p>Teleports to a unit, friendly or enemy, and grants bonus attack speed while attacking if it's an enemy unit.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phantom Assassin/skill3.png">
              <div class="carousel-caption">
                <h3>Blur</h3>
                <p>Phantom Assassin focuses inward, increasing her ability to evade enemy attacks, and allowing her to blur her body to disappear from the enemy team's minimap when far from enemy heroes.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phantom Assassin/skill4.png">
              <div class="carousel-caption">
                <h3>Coup de Grace</h3>
                <p>Phantom Assassin refines her combat abilities, gaining a chance of delivering a devastating critical strike to enemy units. Stifling Dagger shares the same critical strike chance.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPAA" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPAA" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPL">
    <img src="img/Phantom Lancer/PL.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myPL">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Phantom Lancer)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPLL" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPLL" data-slide-to="0" class="active"></li>
              <li data-target="#myPLL" data-slide-to="1"></li>
              <li data-target="#myPLL" data-slide-to="2"></li>
              <li data-target="#myPLL" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Phantom Lancer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Spirit Lance</h3>
                    <p>Sends a magical spirit lance to a target enemy unit that damages and slows, while summoning an illusory phantom to attack the unit.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Phantom Lancer/skill2.png">
              <div class="carousel-caption">
                <h3>Doppelganger</h3>
                <p>Phantom Lancer briefly vanishes from the battlefield. After 1 second, Phantom Lancer and any of his nearby illusions reappear at a random position within the targeted location.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phantom Lancer/skill3.png">
              <div class="carousel-caption">
                <h3>Phantom Rush</h3>
                <p>When targeting an enemy for an attack, Phantom Lancer quickly charges into range, gaining a temporary agility boost upon reaching the target. Phantom Lancer's illusions also have this ability.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Phantom Lancer/skill4.png">
              <div class="carousel-caption">
                <h3>Juxtapose</h3>
                <p>Phantom Lancer has a chance to fracture his presence, creating an illusion of himself. Illusions also have a chance to fracture further. Illusions created from Phantom Lancer last for 8 seconds, while illusions created from other illusions last 4 seconds.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPLL" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPLL" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRZ">
    <img src="img/Razor/Rz.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myRZ">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Razor)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myRZZ" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myRZZ" data-slide-to="0" class="active"></li>
              <li data-target="#myRZZ" data-slide-to="1"></li>
              <li data-target="#myRZZ" data-slide-to="2"></li>
              <li data-target="#myRZZ" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Razor/skill1.png">
                  <div class="carousel-caption">
                    <h3>Plasma Field</h3>
                    <p>Releases a wave of energetic plasma that grows in power as it expands, but also zaps on contraction, dealing damage to enemy units caught in its path.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Razor/skill2.png">
              <div class="carousel-caption">
                <h3>Static Link</h3>
                <p>Creates a charged link between Razor and an enemy Hero, stealing damage from the target and giving it to Razor.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Razor/skill3.png">
              <div class="carousel-caption">
                <h3>Unstable Current</h3>
                <p>Razor moves with increased speed, and hits a random nearby unit with a jolt of electricity every 5 seconds. The jolt deals damages, slows, and purges buffs from enemies.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Razor/skill4.png">
              <div class="carousel-caption">
                <h3>Eye of the Storm</h3>
                <p>A powerful lightning storm strikes out at enemy units with the lowest health, dealing damage and reducing their armor.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myRZZ" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myRZZ" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRK">
    <img src="img/Riki/riki.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myRK">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Riki)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myRKK" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myRKK" data-slide-to="0" class="active"></li>
              <li data-target="#myRKK" data-slide-to="1"></li>
              <li data-target="#myRKK" data-slide-to="2"></li>
              <li data-target="#myRKK" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Riki/skill1.png">
                  <div class="carousel-caption">
                    <h3>Smoke Screen</h3>
                    <p>Throws down a smoke bomb, silencing enemies, and causing them to miss most attacks, as well as slowing movement.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Riki/skill2.png">
              <div class="carousel-caption">
                <h3>Blink Strike</h3>
                <p>Teleports behind the target unit, striking for bonus damage if it is an enemy.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Riki/skill3.png">
              <div class="carousel-caption">
                <h3>Cloak and Dagger</h3>
                <p>Riki fades into the shadows, becoming invisible. Every time Riki strikes his enemy from behind, he deals bonus damage based on his Agility. When Riki attacks, he becomes visible.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Riki/skill4.png">
              <div class="carousel-caption">
                <h3>Tricks of Trade</h3>
                <p>Riki phases out of the world while striking random enemy heroes from behind in an area around him.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myRKK" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myRKK" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySF">
    <img src="img/Shadow Fiend/sf.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySF">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Shadow Fiend)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySFF" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySFF" data-slide-to="0" class="active"></li>
              <li data-target="#mySFF" data-slide-to="1"></li>
              <li data-target="#mySFF" data-slide-to="2"></li>
              <li data-target="#mySFF" data-slide-to="3"></li>
              <li data-target="#mySFF" data-slide-to="4"></li>  
              <li data-target="#mySFF" data-slide-to="5"></li>          
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Shadow Fiend/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shadowraze (Near)</h3>
                    <p>Shadow Fiend razes the ground directly in front of him, dealing damage to enemy units in the area. Adds a stacking damage amplifier on the target that causes the enemy to take bonus Shadow Raze damage per stack.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Shadow Fiend/skill2.png">
              <div class="carousel-caption">
                <h3>Shadowraze (Medium)</h3>
                <p>Shadow Fiend razes the ground a short distance away from him, dealing damage to enemy units in the area. Adds a stacking damage amplifier on the target that causes the enemy to take bonus Shadow Raze damage per stack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Shadow Fiend/skill3.png">
              <div class="carousel-caption">
                <h3>Shadowraze (Far)</h3>
                <p>Shadow Fiend razes the ground a longer distance away from him, dealing damage to enemy units in the area. Adds a stacking damage amplifier on the target that causes the enemy to take bonus Shadow Raze damage per stack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Shadow Fiend/skill4.png">
              <div class="carousel-caption">
                <h3>Necromastery</h3>
                <p>Shadow Fiend steals the soul from units he kills, gaining bonus damage. If the killed unit is a hero, he gains 12 souls. On death, he releases half of them from bondage.</p>
              </div>
            </div>
            

            <div class="item">
              <img src="img/Shadow Fiend/skill5.png">
              <div class="carousel-caption">
                <h3>Presence of the Dark Lord</h3>
                <p>Shadow Fiend's presence reduces the armor of nearby enemies.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Shadow Fiend/skill6.png">
              <div class="carousel-caption">
                <h3>Requiem of Souls</h3>
                <p>Shadow Fiend gathers his captured souls to release them as lines of demonic energy. Units near Shadow Fiend when the souls are released can be damaged by several lines of energy.</p>
              </div>
            </div>
          </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySFF" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySFF" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySAL">
    <img src="img/Slark/slark.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySAL">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Slark)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySALL" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySALL" data-slide-to="0" class="active"></li>
              <li data-target="#mySALL" data-slide-to="1"></li>
              <li data-target="#mySALL" data-slide-to="2"></li>
              <li data-target="#mySALL" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Slark/skill1.png">
                  <div class="carousel-caption">
                    <h3>Dark Pact</h3>
                    <p>After a short delay, Slark sacrifices some of his life blood, purging most negative debuffs and dealing damage to enemy units around him and to himself. Slark only takes 50% of the damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Slark/skill2.png">
              <div class="carousel-caption">
                <h3>Pounce</h3>
                <p>Slark leaps forward, grabbing the first hero he connects with. That unit takes damage and is leashed to Slark, and can only move a limited distance away from Slark's landing position.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Slark/skill3.png">
              <div class="carousel-caption">
                <h3>Essence Shift</h3>
                <p>Slark steals the life essence of enemy heroes with his attacks, draining each of their attributes and converting them to bonus Agility.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Slark/skill4.png">
              <div class="carousel-caption">
                <h3>Shadow Dance</h3>
                <p>When used, Slark hides himself in a cloud of shadows, becoming immune to detection. Attacking, casting spells, and using items will not reveal Slark..</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySALL" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySALL" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySNI">
    <img src="img/Sniper/snip.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySNI">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Sniper)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySNIPP" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySNIPP" data-slide-to="0" class="active"></li>
              <li data-target="#mySNIPP" data-slide-to="1"></li>
              <li data-target="#mySNIPP" data-slide-to="2"></li>
              <li data-target="#mySNIPP" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Sniper/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shrapnel</h3>
                    <p>Consumes a charge to launch a ball of shrapnel that showers the target area in explosive pellets. Enemies are subject to damage and slowed movement. Reveals the targeted area.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Sniper/skill2.png">
              <div class="carousel-caption">
                <h3>Blink Strike</h3>
                <p>Teleports behind the target unit, striking for bonus damage if it is an enemy.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sniper/skill3.png">
              <div class="carousel-caption">
                <h3>Headshot</h3>
                <p>Sniper increases his accuracy, giving him a chance to deal extra damage and briefly stop the movements of his enemies.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Sniper/skill4.png">
              <div class="carousel-caption">
                <h3>Take Aim</h3>
                <p>Extends the attack range of Sniper's rifle.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySNIPP" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySNIPP" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySPEC">
    <img src="img/Spectre/spectre.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="mySPEC">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Spectre)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySPECC" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySPECC" data-slide-to="0" class="active"></li>
              <li data-target="#mySPECC" data-slide-to="1"></li>
              <li data-target="#mySPECC" data-slide-to="2"></li>
              <li data-target="#mySPECC" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Spectre/skill1.png">
                  <div class="carousel-caption">
                    <h3>Spectral Dagger</h3>
                    <p>Spectre flings a dagger to draw a Shadow Path, dealing damage and slowing the movement speed of any enemies along the trail. </p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Spectre/skill2.png">
              <div class="carousel-caption">
                <h3>Desolate</h3>
                <p>Deals bonus damage whenever Spectre attacks an enemy who is alone. Reduces the enemy vision for 5 seconds.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Spectre/skill3.png">
              <div class="carousel-caption">
                <h3>Dispersion</h3>
                <p>Damage done to Spectre is reflected on her enemies, leaving her unharmed. The effect lessens with distance.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Spectre/skill4.png">
              <div class="carousel-caption">
                <h3>Hunt</h3>
                <p>Creates a spectral nemesis to attack each enemy hero after a short delay. At any moment during the duration, Spectre can use Reality to exchange places of a given haunt.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySPECC" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySPECC" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTA">
    <img src="img/Templar Assassin/ta.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTA">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Templar Assassin)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTAA" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTAA" data-slide-to="0" class="active"></li>
              <li data-target="#myTAA" data-slide-to="1"></li>
              <li data-target="#myTAA" data-slide-to="2"></li>
              <li data-target="#myTAA" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Templar Assassin/skill1.png">
                  <div class="carousel-caption">
                    <h3>Refraction</h3>
                    <p>Templar Assassin becomes highly elusive, avoiding damage and gaining a bonus to her damage. The damage and avoidance effects are separate, and have a limited number of instances.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Templar Assassin/skill2.png">
              <div class="carousel-caption">
                <h3>Meld</h3>
                <p>Templar Assassin conceals herself, becoming invisible as long as she remains still. If Meld's invisibility is broken by attacking an enemy, </p>
              </div>
            </div>

            <div class="item">
              <img src="img/Templar Assassin/skill3.png">
              <div class="carousel-caption">
                <h3>PSI Blades</h3>
                <p>Templar Assassin's psi blades slice through the attacked unit, splitting and damaging enemy units directly behind it, while gaining bonus attack range.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Templar Assassin/skill4.png">
              <div class="carousel-caption">
                <h3>Psionic Trap</h3>
                <p>Templar Assassin places mystical traps that invisibly monitor enemy movement. When sprung at her command, they exert a slowing influence of 30% in the area.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTAA" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTAA" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTB">
    <img src="img/Terrorblade/TB.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myTB">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Terrorblade)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTBB" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTBB" data-slide-to="0" class="active"></li>
              <li data-target="#myTBB" data-slide-to="1"></li>
              <li data-target="#myTBB" data-slide-to="2"></li>
              <li data-target="#myTBB" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Terrorblade/skill1.png">
                  <div class="carousel-caption">
                    <h3>Reflection</h3>
                    <p>Terrorblade brings forth an invulnerable dark reflection of all nearby enemy heroes. Affected enemy heroes are slowed and attacked by their reflection.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Terrorblade/skill2.png">
              <div class="carousel-caption">
                <h3>Conjure Image</h3>
                <p>Creates an illusion of Terrorblade that deals damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Terrorblade/skill3.png">
              <div class="carousel-caption">
                <h3>Metamorphosis</h3>
                <p>Terrorblade transforms into a powerful demon with a ranged attack. Any of Terrorblade's illusions that are within 900 range will also be transformed by Metamorphosis.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Terrorblade/skill4.png">
              <div class="carousel-caption">
                <h3>Sunder</h3>
                <p>Severs the life from both Terrorblade and a target hero, exchanging a percentage of both units' current health. Some health points must remain.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTBB" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTBB" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTW">
    <img src="img/Troll Warlord/TW.png" width="90" height="50">
  </button>
 
  <!-- The Modal -->
  <div class="modal fade" id="myTW">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Troll Warlord)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTWW" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTWW" data-slide-to="0" class="active"></li>
              <li data-target="#myTWW" data-slide-to="1"></li>
              <li data-target="#myTWW" data-slide-to="2"></li>
              <li data-target="#myTWW" data-slide-to="3"></li>
              <li data-target="#myTWW" data-slide-to="4"></li>         
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Troll Warlord/skill1.png">
                  <div class="carousel-caption">
                    <h3>Berserker's Rage</h3>
                    <p>While active, Troll Warlord swaps from using ranged to melee attacks. Melee attacks have a chance to bash, dealing bonus damage and stunning the target.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Troll Warlord/skill2.png">
              <div class="carousel-caption">
                <h3>Whirling Axes (Ranged)</h3>
                <p>Troll hurls a fistful of five axes in a cone shape over 1000 range, slowing and damaging enemy units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Troll Warlord/skill3.png">
              <div class="carousel-caption">
                <h3>Whirling Axes (Melee)</h3>
                <p>Troll hurls two axes around him in a close range area of effect, damaging enemy units and causing them to miss some attacks.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Troll Warlord/skill4.png">
              <div class="carousel-caption">
                <h3>Fervor</h3>
                <p>With each continuous blow on the same target, Troll gains increased attack speed. If Troll changes targets, the stacks drop to zero.</p>
              </div>
            </div>
            

            <div class="item">
              <img src="img/Troll Warlord/skill5.png">
              <div class="carousel-caption">
                <h3>Battle Trance</h3>
                <p>Troll's presence on the battlefield increases the attack speed of himself and all allied heroes.</p>
              </div>
            </div>
            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTWW" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTWW" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myUR">
    <img src="img/Ursa/ursa.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myUR">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Ursa)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myURR" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myURR" data-slide-to="0" class="active"></li>
              <li data-target="#myURR" data-slide-to="1"></li>
              <li data-target="#myURR" data-slide-to="2"></li>
              <li data-target="#myURR" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Ursa/skill1.png">
                  <div class="carousel-caption">
                    <h3>Earthshock</h3>
                    <p>Ursa slams the earth, causing a powerful shock to damage and slow all enemy units in a nearby area for 4 seconds.</p>
                    </div>
              </div>

            <div class="item">
            <img src="img/Ursa/skill2.png">
              <div class="carousel-caption">
                <h3>Overpower</h3>
                <p>Using his skill in combat, Ursa gains increased attack speed for a number of subsequent attacks.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Ursa/skill3.png">
              <div class="carousel-caption">
                <h3>Fury Swipes</h3>
                <p>Ursa's claws dig deeper wounds in the enemy, causing consecutive attacks to the same enemy to deal more damage. If the same target is not attacked after 20 seconds, the bonus damage is lost.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Ursa/skill4.png">
              <div class="carousel-caption">
                <h3>Enrage</h3>
                <p>Ursa goes into a frenzy, multiplying his Fury Swipes damage and causing him to take 80% less damage. Removes any existing debuffs.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myURR" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myURR" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myVS">
    <img src="img/Vengeful Spirit/VS.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myVS">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Vengeful Spirit)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myVSS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myVSS" data-slide-to="0" class="active"></li>
              <li data-target="#myVSS" data-slide-to="1"></li>
              <li data-target="#myVSS" data-slide-to="2"></li>
              <li data-target="#myVSS" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Vengeful Spirit/skill1.png">
                  <div class="carousel-caption">
                    <h3>Magic Missle</h3>
                    <p>Fires a magic missile at an enemy unit, stunning and dealing damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Vengeful Spirit/skill2.png">
              <div class="carousel-caption">
                <h3>Wave of Terror</h3>
                <p>Vengeful Spirit lets loose a wicked cry, weakening the armor of enemies and giving vision of the path ahead.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Vengeful Spirit/skill3.png">
              <div class="carousel-caption">
                <h3>Vengeance Aura</h3>
                <p>Vengeful Spirit's presence increases the physical damage of nearby friendly units. If an allied hero is slain under the aura, an illusion of your allied hero will be created to fight for that hero.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Vengeful Spirit/skill4.png">
              <div class="carousel-caption">
                <h3>Nether Swap</h3>
                <p>Instantaneously swaps positions with a target Hero, friend or enemy. Nether Swap interrupts channeling abilities on the target.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myVSS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myVSS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myVM">
    <img src="img/Venomancer/VM.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myVM">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Venomancer)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myVMM" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myVMM" data-slide-to="0" class="active"></li>
              <li data-target="#myVMM" data-slide-to="1"></li>
              <li data-target="#myVMM" data-slide-to="2"></li>
              <li data-target="#myVMM" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Venomancer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Venomous Gale</h3>
                    <p>Launches a ball of venom in a line, poisoning enemy units so that they take both initial damage and damage over time, as well as suffering slowed movement.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Venomancer/skill2.png">
              <div class="carousel-caption">
                <h3>Poison Sting</h3>
                <p>Adds poison damage to Venomancer's normal attacks, slowing movement speed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Venomancer/skill3.png">
              <div class="carousel-caption">
                <h3>Plague Ward</h3>
                <p>Summons a plague ward to attack enemy units and structures. The ward is immune to magic. Wards gain the Poison Sting level from Venomancer, dealing 50% of the full damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Venomancer/skill4.png">
              <div class="carousel-caption">
                <h3>Poison Nova</h3>
                <p>A spreading ring of poison that does damage over time to enemy units around Venomancer. Poison Nova cannot deal lethal damage; targets will be left with at least 1 health.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myVMM" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myVMM" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>






  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myVP">
    <img src="img/Viper/viper.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myVP">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Viper)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myVPP" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myVPP" data-slide-to="0" class="active"></li>
              <li data-target="#myVPP" data-slide-to="1"></li>
              <li data-target="#myVPP" data-slide-to="2"></li>
              <li data-target="#myVPP" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Viper/skill1.png">
                  <div class="carousel-caption">
                    <h3>Poison Attack</h3>
                    <p>Intensifies Viper's venom, adding an effect to his normal attack that slows attack and movement speed while dealing damage over time based on how low the target is</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Viper/skill2.png">
              <div class="carousel-caption">
                <h3>Nethertoxin</h3>
                <p>Viper releases a Nethertoxin at the targeted area. Units in that area take damage over time, have lower resistance and their passives do not work.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Viper/skill3.png">
              <div class="carousel-caption">
                <h3>Corrosive Skin</h3>
                <p>Viper exudes an infectious toxin that damages and slows the attack speed of any enemy that damages it in a 1400 radius. The acid exudate also increases Viper's resistance to magic.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Viper/skill4.png">
              <div class="carousel-caption">
                <h3>Viper Strike</h3>
                <p>Viper slows the targeted enemy unit's movement and attack speed while also dealing poison damage over time. The slowing effect reduces over the duration of the poison.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myVPP" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myVPP" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>





  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myWE">
    <img src="img/Weaver/weaver.png" width="90" height="50">
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myWE">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Weaver)</h2>   
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWEA" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWEA" data-slide-to="0" class="active"></li>
              <li data-target="#myWEA" data-slide-to="1"></li>
              <li data-target="#myWEA" data-slide-to="2"></li>
              <li data-target="#myWEA" data-slide-to="3"></li>        
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Weaver/skill1.png">
                  <div class="carousel-caption">
                    <h3>The Swarm</h3>
                    <p>Weaver launches a swarm of 12 young Weavers that latch on any enemy unit in their path, attacking and reducing armor until it is killed.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Weaver/skill2.png">
              <div class="carousel-caption">
                <h3>Shukuchi</h3>
                <p>Weaver shifts out of visibility, gaining the ability to move at maximum speed through physical units--doing harm to any enemies it passes throug</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Weaver/skill3.png">
              <div class="carousel-caption">
                <h3>Geminate Attack</h3>
                <p>Allows Weaver to dispatch two attacks at once.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Weavers/skill4.png">
              <div class="carousel-caption">
                <h3>Time Lapse</h3>
                <p>Weaver warps backward to whatever position it was in five seconds earlier--regaining the HP and mana from that time. No effect on cooldown, gold or experience.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWEA" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWEA" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


  <h2>Intelligence</h2>

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myApparition">
    <img src="img/AncientApparition/ancient.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myApparition">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Ancient Apparition)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myApparitions" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myApparitions" data-slide-to="0" class="active"></li>
              <li data-target="#myApparitions" data-slide-to="1"></li>
              <li data-target="#myApparitions" data-slide-to="2"></li>
              <li data-target="#myApparitions" data-slide-to="3"></li>
              <li data-target="#myApparitions" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/AncientApparition/skill1.png">
                  <div class="carousel-caption">
                    <h3>Cold Feet</h3>
                    <p>Places a frozen hex on an enemy until that deals damage overtime, but can be dispelled by moving away in the initial cast point.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/AncientApparition/skill2.png">
              <div class="carousel-caption">
                <h3>Ice Vortex</h3>
                <p>Creates vortex of icy energy that slows movement speed and increases magic damage done in its range</p>
              </div>
            </div>

            <div class="item">
              <img src="img/AncientApparition/skill3.png">
              <div class="carousel-caption">
                <h3>Chilling Touch</h3>
                <p>Gives bonus magical damage for a given number of physical attacks to alied heroes.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/AncientApparition/skill4.png">
              <div class="carousel-caption">
                <h3>Ice Blast</h3>
                <p>Launches a tracer towards any location of the battlefield, must be triggered again to mark the area to be blasted by damaging explosoin of hail.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/AncientApparition/skill5.png">
              <div class="carousel-caption">
                <h3>Release</h3>
                <p>Release the ice blast to explode at the tracer's current location.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myApparitions" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myApparitions" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBane">
    <img src="img/Bane/Bane.png" width="90" height="50">
  </button>


        <!-- The Modal -->
  <div class="modal fade" id="myBane">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Bane)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBanes" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBanes" data-slide-to="0" class="active"></li>
              <li data-target="#myBanes" data-slide-to="1"></li>
              <li data-target="#myBanes" data-slide-to="2"></li>
              <li data-target="#myBanes" data-slide-to="3"></li>
              <li data-target="#myBanes" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Bane/skill1.png">
                  <div class="carousel-caption">
                    <h3>Enfeeble</h3>
                    <p>Weakens an enemy unit, reducing its physical damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Bane/skill2.png">
              <div class="carousel-caption">
                <h3>Brain Sap</h3>
                <p>Feast on the vital energies of an enemy unit, healing Bane and dealing damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bane/skill3.png">
              <div class="carousel-caption">
                <h3>Nightmare</h3>
                <p>Puts the target enemy or friendly Hero to sleep. Sleeping units area awakened when attacked.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bane/skill4.png">
              <div class="carousel-caption">
                <h3>Nightmare End</h3>
                <p>Ends all ongoing nightmares.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bane/skill5.png">
              <div class="carousel-caption">
                <h3>Fiend's Grip</h3>
                <p>Grips an enemy unit, disabling it and causing heavy damage over time.</p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBanes" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBanes" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myBatrider">
    <img src="img/Batrider/Batrider.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myBatrider">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Batrider)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myBatriders" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myBatriders" data-slide-to="0" class="active"></li>
              <li data-target="#myBatriders" data-slide-to="1"></li>
              <li data-target="#myBatriders" data-slide-to="2"></li>
              <li data-target="#myBatriders" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Batrider/skill1.png">
                  <div class="carousel-caption">
                    <h3>Sticky Napalm</h3>
                    <p>Drenches an area in sticky oil, amplifying damage from Batrider's attacks and abilities and slowing the movement speed and turn rate of enemies in the area.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Batrider/skill2.png">
              <div class="carousel-caption">
                <h3>Flame Break</h3>
                <p>Hurls an explosive cocktail that explodes when it reaches the target location, knocking back, and dealing damage overtime to enemies in the area.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Batrider/skill3.png">
              <div class="carousel-caption">
                <h3>Firefly</h3>
                <p>Batrider takes to the skies , laying down a trail of flames from the air, the fire damages the enemies it touches.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Bane/skill4.png">
              <div class="carousel-caption">
                <h3>Flaming Lasso</h3>
                <p>Lassoes an enemy and drags them in Batrider's wake.  </p>
              </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myBatriders" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myBatriders" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myChen">
    <img src="img/Chen/Chen.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myChen">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Chen)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myChens" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myChens" data-slide-to="0" class="active"></li>
              <li data-target="#myChens" data-slide-to="1"></li>
              <li data-target="#myChens" data-slide-to="2"></li>
              <li data-target="#myChens" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Chen/skill1.png">
                  <div class="carousel-caption">
                    <h3>Penitence</h3>
                    <p>Forces an enemy unit to move slower and take more damage from attacks and spells.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Chen/skill2.png">
              <div class="carousel-caption">
                <h3>Test of Faith</h3>
                <p>Deals random damage to test enemy unit's faith.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Batrider/skill3.png">
              <div class="carousel-caption">
                <h3>Holy Persuasion</h3>
                <p>Chen takes control of an enemy or neutral creep.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Chen/skill4.png">
              <div class="carousel-caption">
                <h3>Hand of God</h3>
                <p>Heals all allied heroes on the map as well as all units under Chen's control</p>
              </div>
            </div>
            </div>
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myChens" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myChens" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCrystal">
    <img src="img/CrystalMaiden/Crystal.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myCrystal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Crystal Maiden)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myCrystals" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCrystals" data-slide-to="0" class="active"></li>
              <li data-target="#myCrystals" data-slide-to="1"></li>
              <li data-target="#myCrystals" data-slide-to="2"></li>
              <li data-target="#myCrystals" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/CrystalMaiden/skill1.png">
                  <div class="carousel-caption">
                    <h3>Cystal Nova</h3>
                    <p>A burst of damaging frost slows enemy movement and attack rate in the targeted area.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/CrystalMaiden/skill2.png">
              <div class="carousel-caption">
                <h3>Frostbite</h3>
                <p>Encases an enemy unit in ice, prohibiting movement and attack, while dealing 50 damage every half-second.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/CrystalMaiden/skill3.png">
              <div class="carousel-caption">
                <h3>Arcane Aura</h3>
                <p>Gives additional mana regenaration to all friendly units on the map.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/CrystalMaiden/skill4.png">
              <div class="carousel-caption">
                <h3>Freezing Field</h3>
                <p>Surrounds Crystal Maiden with random icy explosions that slow enemies and deal massive damage.</p>
              </div>
            </div>
            </div>
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCystals" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCrystals" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDark">
    <img src="img/DarkSeer/Dark.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myDark">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Dark Seer)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDarks" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDarks" data-slide-to="0" class="active"></li>
              <li data-target="#myDarks" data-slide-to="1"></li>
              <li data-target="#myDarks" data-slide-to="2"></li>
              <li data-target="#myDarks" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/DarkSeer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Vacuum</h3>
                    <p>Dark Seer creates a vacuum over the target area that sucks in enemy units, disrupting them and dealing damage.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/DarkSeer/skill2.png">
              <div class="carousel-caption">
                <h3>Ion Shell</h3>
                <p>Surrounds the target unit with a bristling shield that damages enemy units in an area around it.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DarkSeer/skill3.png">
              <div class="carousel-caption">
                <h3>Surge</h3>
                <p>Charges a target friendly unit with power, giving it a brief burst of maximum movement speed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DarkSeer/skill4.png">
              <div class="carousel-caption">
                <h3>Wall of Replica</h3>
                <p>Raises a wall of warping light that slows and creates replicas of any enemy hero who crosses it..</p>
              </div>
            </div>
            </div>
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDarks" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDarks" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDarkWillow">
    <img src="img/DarkWillow/Dark.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myDarkWillow">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Dark Willow)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDarkWill" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDarkWill" data-slide-to="0" class="active"></li>
              <li data-target="#myDarkWill" data-slide-to="1"></li>
              <li data-target="#myDarkWill" data-slide-to="2"></li>
              <li data-target="#myDarkWill" data-slide-to="3"></li>
              <li data-target="#myDarkWill" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/DarkWillow/skill1.png">
                  <div class="carousel-caption">
                    <h3>Bramble Maze</h3>
                    <p>Dark Willo creates maze of brambles that grow in the target area after 0.5 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/DarkWillow/skill2.png">
              <div class="carousel-caption">
                <h3>Shadow Reals</h3>
                <p>Dark Willow recedes in the shadows, becoming untargetable.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DarkWillow/skill3.png">
              <div class="carousel-caption">
                <h3>Cursed Crown</h3>
                <p>Dark Willow cast an ancient fae curse on the target..</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DarkWillow/skill4.png">
              <div class="carousel-caption">
                <h3>Bedlam</h3>
                <p>Dark Willow's pet wisp roams around her for the duration, rapidly attacking nearby enemies.</p>
              </div>
            </div>
           

            <div class="item">
              <img src="img/DarkWillow/skill5.png">
              <div class="carousel-caption">
                <h3>Terrorize</h3>
                <p>Dark Willow realeses her pet wisp to terrorize her enemies.</p>
              </div>
            </div>
            </div>
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDarkWill" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDarkWill" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  


                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDazzle">
    <img src="img/Dazzle/Dazzle.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myDazzle">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Dazzle)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDazzles" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDazzles" data-slide-to="0" class="active"></li>
              <li data-target="#myDazzles" data-slide-to="1"></li>
              <li data-target="#myDazzles" data-slide-to="2"></li>
              <li data-target="#myDazzles" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Dazzle/skill1.png">
                  <div class="carousel-caption">
                    <h3>Poison Touch</h3>
                    <p>Releases a cone of poisonous magic that strikes multiple enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Dazzle/skill2.png">
              <div class="carousel-caption">
                <h3>Shallow Grave</h3>
                <p>An ally blessed with Shallow Grave, no matter how close to death, cannot die while undeer its protection.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Dazzle/skill3.png">
              <div class="carousel-caption">
                <h3>Shadow Wave</h3>
                <p>Sends out a bolt of power that arcs between allies, healing them while damaging, any units standing nearby.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Dazzle/skill4.png">
              <div class="carousel-caption">
                <h3>Weave</h3>
                <p>Applies a buff that increases the armor of allied heroes while decreasing the armor of enemy heroesin the target area over time.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDazzles" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDazzles" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  


                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDeath">
    <img src="img/DeathProphet/DeathProphet.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myDeath">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Death Prophet)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDeaths" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDeaths" data-slide-to="0" class="active"></li>
              <li data-target="#myDeaths" data-slide-to="1"></li>
              <li data-target="#myDeaths" data-slide-to="2"></li>
              <li data-target="#myDeaths" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/DeathProphet/skill1.png">
                  <div class="carousel-caption">
                    <h3>Crypt Swarm</h3>
                    <p>Sends a swarm of winged beast to savage enemy units in front of Death Prophet.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/DeathProphet/skill2.png">
              <div class="carousel-caption">
                <h3>Silence</h3>
                <p>Prevents enemy units in a target area from casting spells.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DeathProphet/skill3.png">
              <div class="carousel-caption">
                <h3>Spirit Siphon</h3>
                <p>Creates a spirit link between Death Prophet and an enemy unit.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/DeathProphet/skill4.png">
              <div class="carousel-caption">
                <h3>Exorcism</h3>
                <p>Unleashes evil spirits to drain the life of nearby enemy units and structures.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDeaths" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDeaths" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myDisruptor">
    <img src="img/Disruptor/Disruptor.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myDisruptor">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Disruptor)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myDisruptors" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myDisruptors" data-slide-to="0" class="active"></li>
              <li data-target="#myDisruptors" data-slide-to="1"></li>
              <li data-target="#myDisruptors" data-slide-to="2"></li>
              <li data-target="#myDisruptors" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Disruptor/skill1.png">
                  <div class="carousel-caption">
                    <h3>Thunder Strike</h3>
                    <p>Repeatedly strikes the target unit with lightning.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Disruptor/skill2.png">
              <div class="carousel-caption">
                <h3>Glimpse</h3>
                <p>Teleports the target hero back to wjere it was 4 seconds ago.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Disruptor/skill3.png">
              <div class="carousel-caption">
                <h3>Kinetic Field</h3>
                <p>After a short formation time, creates a circular barrier of kinetic energy that enemies can't pass.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Disruptor/skill4.png">
              <div class="carousel-caption">
                <h3>Static Storm</h3>
                <p>Creates a damaging static storm that also silences all enemy units in the area for the duration.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myDisruptors" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myDisruptors" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  


           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEnchantress">
    <img src="img/Enchantress/Enchantress.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myEnchantress">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Enchantress)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myEnchantresss" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myEnchantresss" data-slide-to="0" class="active"></li>
              <li data-target="#myEnchantresss" data-slide-to="1"></li>
              <li data-target="#myEnchantresss" data-slide-to="2"></li>
              <li data-target="#myEnchantresss" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Enchantress/skill1.png">
                  <div class="carousel-caption">
                    <h3>Untouchable</h3>
                    <p>Enchantress beguiles her enemies, slowing their attacks when she is attacked.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Enchantress/skill2.png">
              <div class="carousel-caption">
                <h3>Enchant</h3>
                <p>Enchantress charms an enemy.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Enchantress/skill3.png">
              <div class="carousel-caption">
                <h3>Nature's Attendant</h3>
                <p>A cloud of wisps heals Enchantress and any friendly units nearby.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Enchantress/skill4.png">
              <div class="carousel-caption">
                <h3>Impetus</h3>
                <p>Places an enchantment on each attack while activated, causing it to deal additional damage based on how far away the target is.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myEnchantresss" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myEnchantresss" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myEnigma">
    <img src="img/Enigma/Enigma.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myEnigma">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Enigma)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myEnigmas" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myEnigmas" data-slide-to="0" class="active"></li>
              <li data-target="#myEnigmas" data-slide-to="1"></li>
              <li data-target="#myEnigmas" data-slide-to="2"></li>
              <li data-target="#myEnigmas" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Enigma/skill1.png">
                  <div class="carousel-caption">
                    <h3>Malefice</h3>
                    <p>Focuses Enigma's power on a target, causing it to take damage and become repeatedly stunned for multiple instances.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Enigma/skill2.png">
              <div class="carousel-caption">
                <h3>Eidolon</h3>
                <p>Conversion kills the target unit, granting gold and expirience bounty.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Enigma/skill3.png">
              <div class="carousel-caption">
                <h3>Midnight Pulse</h3>
                <p>Steeps an area in dark resonance, damaging enemy units based on their max HP.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Enigma/skill4.png">
              <div class="carousel-caption">
                <h3>Black Hole</h3>
                <p>Summons vortex that sucks in nearby enemy units.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myEnigmas" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myEnigmas" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myInvoker">
    <img src="img/Invoker/Invoker.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myInvoker">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Invoker)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myInvokers" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myInvokers" data-slide-to="0" class="active"></li>
              <li data-target="#myInvokers" data-slide-to="1"></li>
              <li data-target="#myInvokers" data-slide-to="2"></li>
              <li data-target="#myInvokers" data-slide-to="3"></li>
              <li data-target="#myInvokers" data-slide-to="4"></li>
              <li data-target="#myInvokers" data-slide-to="5"></li>
              <li data-target="#myInvokers" data-slide-to="6"></li>
              <li data-target="#myInvokers" data-slide-to="7"></li>
              <li data-target="#myInvokers" data-slide-to="8"></li>
              <li data-target="#myInvokers" data-slide-to="9"></li>
              <li data-target="#myInvokers" data-slide-to="10"></li>
              <li data-target="#myInvokers" data-slide-to="11"></li>
              <li data-target="#myInvokers" data-slide-to="12"></li>
              <li data-target="#myInvokers" data-slide-to="13"></li>
              <li data-target="#myInvokers" data-slide-to="14"></li>



            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Invoker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Quas</h3>
                    <p>Allows manipulation of ice element.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Invoker/skill2.png">
              <div class="carousel-caption">
                <h3>wex</h3>
                <p>Allows manipulation of storm element.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Invoker/skill3.png">
              <div class="carousel-caption">
                <h3>Exort</h3>
                <p>Allows manipulation of fire elements.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Invoker/skill4.png">
              <div class="carousel-caption">
                <h3>Invoke</h3>
                <p>Combines the properties of the elements currently being manipulated to create a new spell for invoker to use</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Invoker/skill5.png">
              <div class="carousel-caption">
                <h3>Cold Snap</h3>
                <p>Invoker draws the heat from an enemy, chillingthem to their very core for a duration based on the level of Quas</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Invoker/skill6.png">
              <div class="carousel-caption">
                <h3>Ghost Walk</h3>
                <p>Invoker manipulates the ice and electrical energies around him, renderinghis body invisible</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Invoker/skill7.png">
              <div class="carousel-caption">
                <h3>Ice Wall</h3>
                <p>Generates a wall of solid ice directly in front of Invoker for a duration based on the level of Quas.</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Invoker/skill8.png">
              <div class="carousel-caption">
                <h3>EMP</h3>
                <p>Invoker builds up a charge of electromagnetic energy at a target location which automatically detonates after 2.9 seconds.</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Invoker/skill9.png">
              <div class="carousel-caption">
                <h3>Tornado</h3>
                <p>Unleashes a fast moving tornado that picks up enemy units in its path, suspending them helplessly in the air shortly before allowing them to plummet to their doom.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Invoker/skill10.png">
              <div class="carousel-caption">
                <h3>Alactrity</h3>
                <p>Invoker infuses an ally with an immense surge of energy, increasing their attack speed based on the level of Wex.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Invoker/skill11.png">
              <div class="carousel-caption">
                <h3>Sun Strike</h3>
                <p>Sends a catastrophic ray of firce energy from the sun at any targeted location.</p>
              </div>
            </div>

              <div class="item">
              <img src="img/Invoker/skill12.png">
              <div class="carousel-caption">
                <h3>Forge Spirit</h3>
                <p>Invoker forges a spirit embodying the strenghth of fire and fortitude of ice.</p>
              </div>
            </div>

              <div class="item">
              <img src="img/Invoker/skill13.png">
              <div class="carousel-caption">
                <h3>Chaos Mateor</h3>
                <p>Invoker pulls a flaming meteor from space onto the targeted location.</p>
              </div>
            </div>

              <div class="item">
              <img src="img/Invoker/skill14.png">
              <div class="carousel-caption">
                <h3>Deafening Blast</h3>
                <p>Invoker unleashes a mighty sonic wave infront of him, dealing damage to any enemy unit it collides with based on the level of exort.</p>
              </div>
            </div>

              <div class="item">
              <img src="img/Invoker/skill15.png">
              <div class="carousel-caption">
                <h3>Melting Strike</h3>
                <p>Melts away the armor of heroes hit by the spirits attack if the spirit has enough mana.</p>
              </div>
            </div>

            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myInvokers" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myInvokers" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myJakiro">
    <img src="img/Jakiro/Jakiro.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myJakiro">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Jakiro)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myJakiros" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myJakiros" data-slide-to="0" class="active"></li>
              <li data-target="#myJakiros" data-slide-to="1"></li>
              <li data-target="#myJakiros" data-slide-to="2"></li>
              <li data-target="#myJakiros" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Jakiro/skill1.png">
                  <div class="carousel-caption">
                    <h3>Dual Breath</h3>
                    <p>An icy blast followed by a wave of fire launches out a path in front of Jakiro.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Jakiro/skill2.png">
              <div class="carousel-caption">
                <h3>Ice Path</h3>
                <p>Creates a path of ice that stuns and damages enemies that touch it.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Jakiro/skill3.png">
              <div class="carousel-caption">
                <h3>Liquid Fire</h3>
                <p>Jakiro burns his enemies in an area of effect with fire added to his attack, while slowing their attacks.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Jakiro/skill4.png">
              <div class="carousel-caption">
                <h3>Macropyre</h3>
                <p>Jakiro exhales a wide line of lasting flames, which deals damage per second to any enemy units caught in the fire.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myJakiros" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myJakiros" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myKeeper">
    <img src="img/KeeperoftheLight/Keeper.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myKeeper">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Keeper of the Light)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myKeepers" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myKeepers" data-slide-to="0" class="active"></li>
              <li data-target="#myKeepers" data-slide-to="1"></li>
              <li data-target="#myKeepers" data-slide-to="2"></li>
              <li data-target="#myKeepers" data-slide-to="3"></li>
              <li data-target="#myKeepers" data-slide-to="4"></li>
              <li data-target="#myKeepers" data-slide-to="5"></li>
              <li data-target="#myKeepers" data-slide-to="6"></li>
              <li data-target="#myKeepers" data-slide-to="7"></li>
              <li data-target="#myKeepers" data-slide-to="8"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/KeeperoftheLight/skill1.png">
                  <div class="carousel-caption">
                    <h3>Illuminate</h3>
                    <p>Channels light energy, building power the longer it's channeled.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/KeeperoftheLight/skill2.png">
              <div class="carousel-caption">
                <h3>Illuminate Release</h3>
                <p>Release the channel early.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/KeeperoftheLight/skill3.png">
              <div class="carousel-caption">
                <h3>Mana Leak</h3>
                <p>Weakens an enemy's magical essence, causing them to lose mana as they move.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/KeeperoftheLight/skill4.png">
              <div class="carousel-caption">
                <h3>Chakra Magic</h3>
                <p>Restores mana to the target unit, increasing its mana capacity, and reduces the cooldown of the nexct spell they cast.</p>
              </div>
            </div>
            
            <div class="item">
              <img src="img/KeeperoftheLight/skill5.png">
              <div class="carousel-caption">
                <h3>Spirit Form</h3>
                <p>Ezalor temporarily turns his body luminescent, gaining various abilities.</p>
              </div>
            </div>

              <div class="item">
              <img src="img/KeeperoftheLight/skill6.png">
              <div class="carousel-caption">
                <h3>Recall</h3>
                <p>After a short delay , teleports the targeted friendly hero to your location.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/KeeperoftheLight/skill7.png">
              <div class="carousel-caption">
                <h3>Blinding Light</h3>
                <p>A blinding light flashes over the targeted area, knocking back and blinding the units in the area, causing them to miss attacks.</p>
              </div>
            </div>

          <div class="item">
              <img src="img/KeeperoftheLight/skill8.png">
              <div class="carousel-caption">
                <h3>Illuminate(Spirit Form)</h3>
                <p>Channles the light energy, building power the longer it's channeled .</p>
              </div>
            </div>

            <div class="item">
              <img src="img/KeeperoftheLight/skill9.png">
              <div class="carousel-caption">
                <h3>Illuminate Released (Spirit Form)</h3>
                <p>Releases the channel early.</p>
              </div>
            </div>

            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myKeepers" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myKeepers" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLeshrac">
    <img src="img/Leshrac/Leshrac.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myLeshrac">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Leshrac)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLeshracs" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLeshracs" data-slide-to="0" class="active"></li>
              <li data-target="#myLeshracs" data-slide-to="1"></li>
              <li data-target="#myLeshracs" data-slide-to="2"></li>
              <li data-target="#myLeshracs" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Leshrac/skill1.png">
                  <div class="carousel-caption">
                    <h3>Split Earth</h3>
                    <p>Splits the earth under enemies. Deals damage and stuns for a short duration.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Leshrac/skill2.png">
              <div class="carousel-caption">
                <h3>Diabolic Edict</h3>
                <p>Saturates the area around Leshrac with magical explosions that deal physical damage to enemy units and structures.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Leshrac/skill3.png">
              <div class="carousel-caption">
                <h3>Lightning Storm</h3>
                <p>Summons a lightning storm that blasts the target enemy unit, then jumps to nearby enemy units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Leshrac/skill4.png">
              <div class="carousel-caption">
                <h3>Pulse Nova</h3>
                <p>Creates waves of damaging energy around Leshrac, one per second, to damage nearby units.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLeshracs" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLeshracs" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLich">
    <img src="img/Lich/Lich.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myLich">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lich)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLichs" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLichs" data-slide-to="0" class="active"></li>
              <li data-target="#myLichs" data-slide-to="1"></li>
              <li data-target="#myLichs" data-slide-to="2"></li>
              <li data-target="#myLichs" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lich/skill1.png">
                  <div class="carousel-caption">
                    <h3>sFrost Blast</h3>
                    <p>Blast the target enemy unit with damaging front, dealing area damage and slowing movement and attack rate for 4 seconds.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lich/skill2.png">
              <div class="carousel-caption">
                <h3>Ice Armor</h3>
                <p>Creates a shield around the target friendly unit or building, which adds armor and slows attacking units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lich/skill3.png">
              <div class="carousel-caption">
                <h3>Sacrifice</h3>
                <p>Sacrifices a friendly creep and converts its current hit points into mana to lich.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lich/skill4.png">
              <div class="carousel-caption">
                <h3>Chain Frost</h3>
                <p>Releases an orb of frost that bounces between nearby enemy units up to 10 times, slowing and damaging each time it hits.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLichs" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLichs" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLina">
    <img src="img/Lina/Lina.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myLina">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lina)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLinas" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLinas" data-slide-to="0" class="active"></li>
              <li data-target="#myLinas" data-slide-to="1"></li>
              <li data-target="#myLinas" data-slide-to="2"></li>
              <li data-target="#myLinas" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lina/skill1.png">
                  <div class="carousel-caption">
                    <h3>Dragon Slave</h3>
                    <p>Lina channels the breath of a dragon, sending out a wave of fire that scorches every enemy in its path.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lina/skill2.png">
              <div class="carousel-caption">
                <h3>Light Strike Array</h3>
                <p>Summons a column of flames that damages and stuns enemies.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lina/skill3.png">
              <div class="carousel-caption">
                <h3>Fiery Souls</h3>
                <p>Grants bonus attack and movement speed each time Lina casts a spell.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lina/skill4.png">
              <div class="carousel-caption">
                <h3>Laguna Blade</h3>
                <p>Fires off a bolt of lightning at a single enemy unit, dealing massive damage.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLinas" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLinas" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLion">
    <img src="img/Lion/Lion.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myLion">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Lion)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myLions" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myLions" data-slide-to="0" class="active"></li>
              <li data-target="#myLions" data-slide-to="1"></li>
              <li data-target="#myLions" data-slide-to="2"></li>
              <li data-target="#myLions" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Lion/skill1.png">
                  <div class="carousel-caption">
                    <h3>Earth Spike</h3>
                    <p>Rock spikes burst from earth along a straight path.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Lion/skill2.png">
              <div class="carousel-caption">
                <h3>Hex</h3>
                <p>Transforms an enemy unit into a harmless beast, with all special abilities disabled.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lion/skill3.png">
              <div class="carousel-caption">
                <h3>Mana Drain</h3>
                <p>Absorbs the magical energies of a target enemy unit by taking mana from it every second.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Lion/skill4.png">
              <div class="carousel-caption">
                <h3>Finger of Death</h3>
                <p>Rips at an enemy unit, trying to turn it inside-out. Deals massive damage.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myLions" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myLions" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNature">
    <img src="img/NatureProphet/Nature.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myNature">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Nature's Prophet)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNatures" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNatures" data-slide-to="0" class="active"></li>
              <li data-target="#myNatures" data-slide-to="1"></li>
              <li data-target="#myNatures" data-slide-to="2"></li>
              <li data-target="#myNatures" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/NatureProphet/skill1.png">
                  <div class="carousel-caption">
                    <h3>Sprout</h3>
                    <p>Sprouts a ring of trees around a unit, trapping it in place.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/NatureProphet/skill2.png">
              <div class="carousel-caption">
                <h3>Teleportation</h3>
                <p>Teleports to any point on the map.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/NatureProphet/skill3.png">
              <div class="carousel-caption">
                <h3>Nature's Call</h3>
                <p>Converts an area of trees into treants.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/NatureProphet/skill4.png">
              <div class="carousel-caption">
                <h3>Wrath of Nature </h3>
                <p>Damaging energy bounces around the map, striking enemies close to the cast point that are in vision.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNatures" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNatures" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myNecro">
    <img src="img/Necrophos/Necro.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myNecro">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Necrophos)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myNecros" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myNecros" data-slide-to="0" class="active"></li>
              <li data-target="#myNecros" data-slide-to="1"></li>
              <li data-target="#myNecros" data-slide-to="2"></li>
              <li data-target="#myNecros" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Necrophos/skill1.png">
                  <div class="carousel-caption">
                    <h3>Death Pulse</h3>
                    <p>Necrophos releases a wave of death around him, dealing damage to enemy units and healing allied units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Necrophos/skill2.png">
              <div class="carousel-caption">
                <h3>Ghost Shroud</h3>
                <p>Necrophos slips into the realm that separates the living from the dead. Unable to attack or be attacked.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Necrophos/skill3.png">
              <div class="carousel-caption">
                <h3>Heartstopper Aura</h3>
                <p>Necrophos stills the heart of his opponents, causing nearby enemy units to lose a percentage of their max health over time.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Necrophos/skill4.png">
              <div class="carousel-caption">
                <h3>Reaper's Scythe </h3>
                <p>Stuns the target enemy hero, then deals damage based on how much life it is missing.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myNecros" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myNecros" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myOgre">
    <img src="img/OgreMagi/Ogre.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myOgre">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Ogre Magi)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myOgres" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myOgres" data-slide-to="0" class="active"></li>
              <li data-target="#myOgres" data-slide-to="1"></li>
              <li data-target="#myOgres" data-slide-to="2"></li>
              <li data-target="#myOgres" data-slide-to="3"></li>
              <li data-target="#myOgres" data-slide-to="4"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/OgreMagi/skill1.png">
                  <div class="carousel-caption">
                    <h3>Fireblast</h3>
                    <p>Blast an enemy unit with a wave of fire, dealing damage and stunning the target.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/OgreMagi/skill2.png">
              <div class="carousel-caption">
                <h3>Ignite</h3>
                <p>Drenches a target in volatile chemicals, causing it to burst into flames.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/OgreMagi/skill3.png">
              <div class="carousel-caption">
                <h3>Bloodlust</h3>
                <p>Incites a frenzy in a friendly unit, increasing its movement speed and attack speed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/OgreMagi/skill4.png">
              <div class="carousel-caption">
                <h3>Multicast</h3>
                <p>Enables Ogre Magi to cast his spells multiple times with each use.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/OgreMagi/skill5.png">
              <div class="carousel-caption">
                <h3>Unrefined Fireblast</h3>
                <p>Blast an enemy unit with a wave of fire dealing damage and stunning the target.</p>
              </div>
            </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myOgres" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myOgres" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myOracle">
    <img src="img/Oracle/Oracle.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myOracle">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Oracle)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myOracles" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myOracles" data-slide-to="0" class="active"></li>
              <li data-target="#myOracles" data-slide-to="1"></li>
              <li data-target="#myOracles" data-slide-to="2"></li>
              <li data-target="#myOracles" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Oracle/skill1.png">
                  <div class="carousel-caption">
                    <h3>Fortune's End</h3>
                    <p>Gathers Oracle's power into a bolt of scouring energy that, when released, dagaes, roots, and purges enemies of buffs in an area around the target.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Oracle/skill2.png">
              <div class="carousel-caption">
                <h3>Fate's Edict</h3>
                <p>Oracles enraptures a target, disarming them and granting them 100% magic damage resistance..</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Oracle/skill3.png">
              <div class="carousel-caption">
                <h3>Purifying Flames</h3>
                <p>Burns away impurities, dealing heavy magic damage to the target before causing them to regenerate health over time.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Oracle/skill4.png">
              <div class="carousel-caption">
                <h3>False Promise</h3>
                <p>Temporarily alters an ally's destiny, dealaying any healing or damagae taken until False Promise ends.</p>
              </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myOracles" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myOracles" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myOD">
    <img src="img/OutworldDevourer/OD.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myOD">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Outworld Devourer) </h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myODS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myODS" data-slide-to="0" class="active"></li>
              <li data-target="#myODS" data-slide-to="1"></li>
              <li data-target="#myODS" data-slide-to="2"></li>
              <li data-target="#myODS" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/OutworldDevourer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Arcane Orb</h3>
                    <p>Adds extra pure damage to Outworld Devourer's attacks, based on his remaining mana pool.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/OutworldDevourer/skill2.png">
              <div class="carousel-caption">
                <h3>Astral Imprisonment</h3>
                <p>Places a target unit into an astral prison.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/OutworldDevourer/skill3.png">
              <div class="carousel-caption">
                <h3>Essence Aura</h3>
                <p>Whenever nearby allied Heroes or Outworld Devourer itself casts a spell, it gains a chance to restore a percentage of its mana pool.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/OutworldDevourer/skill4.png">
              <div class="carousel-caption">
                <h3>Sanity's Eclipse</h3>
                <p>Unleashes a psychic blast that removes 40% of the mana from affected heroes.</p>
              </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myODS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myODS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPuck">
    <img src="img/Puck/Puck.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myPuck">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Puck)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPucks" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPucks" data-slide-to="0" class="active"></li>
              <li data-target="#myPucks" data-slide-to="1"></li>
              <li data-target="#myPucks" data-slide-to="2"></li>
              <li data-target="#myPucks" data-slide-to="3"></li>
              <li data-target="#myPucks" data-slide-to="4"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Puck/skill1.png">
                  <div class="carousel-caption">
                    <h3>Illusory Orb</h3>
                    <p>Puck launches a magic orb that floats in a straight path, damaging enemy units along the way.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Puck/skill2.png">
              <div class="carousel-caption">
                <h3>Ethereal Jaunt</h3>
                <p>Teleports Pucks to a flying Illusory Orb.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Puck/skill3.png">
              <div class="carousel-caption">
                <h3>Waning Rift</h3>
                <p>Puck releases a burst of feerie dust that deals damage and silence enemy units nearby.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Puck/skill4.png">
              <div class="carousel-caption">
                <h3>Phase Shift</h3>
                <p>Puck briefly shifts into anaother dimension where it is immune from harm.</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Puck/skill5.png">
              <div class="carousel-caption">
                <h3>Dream Coil</h3>
                <p>Creates a coil of volatile magic that latches onto enemy Heroes, stunning them for 0.5 sec and damaging them.</p>
              </div>
            </div>

        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPucks" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPucks" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPugna">
    <img src="img/Pugna/Pugna.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myPugna">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Pugna)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myPugnas" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myPugnas" data-slide-to="0" class="active"></li>
              <li data-target="#myPugnas" data-slide-to="1"></li>
              <li data-target="#myPugnas" data-slide-to="2"></li>
              <li data-target="#myPugnas" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Pugna/skill1.png">
                  <div class="carousel-caption">
                    <h3>Nether Blast</h3>
                    <p>An exploding pulse deals damage to enemies and structures in the area.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Pugna/skill2.png">
              <div class="carousel-caption">
                <h3>Decrepify</h3>
                <p>Apowerful banishing spell that slows a unit and renders it unable to attack or be attacked.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pugna/skill3.png">
              <div class="carousel-caption">
                <h3>Nether Wards</h3>
                <p>Pugna places a Nether Ward at the target location.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Pugna/skill4.png">
              <div class="carousel-caption">
                <h3>Life Drain</h3>
                <p>When cast on an enemy, Pugna drains health from the target enemy unit to heal himself and granting visions over the target.</p>
              </div>
            </div>
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myPugnas" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myPugnas" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      
          <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myQP">
    <img src="img/QueenofPain/QP.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myQP">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Queen of Pain)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myQPS" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myQPS" data-slide-to="0" class="active"></li>
              <li data-target="#myQPS" data-slide-to="1"></li>
              <li data-target="#myQPS" data-slide-to="2"></li>
              <li data-target="#myQPS" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/QueenofPain/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shadow Strike</h3>
                    <p>Hurls a poisoned dagger which deals large initial damage, and thens deals damage over time.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/QueenofPain/skill2.png">
              <div class="carousel-caption">
                <h3>Blink</h3>
                <p>Short distance teleportation that allows Queen of Pain to movee in and out for combat.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/QueenofPain/skill3.png">
              <div class="carousel-caption">
                <h3>Scream of Pain</h3>
                <p>The Queen of Pain lets loose a piercing scream around her, damaging nearby enemies.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/QueenofPain/skill4.png">
              <div class="carousel-caption">
                <h3>Sonic Wave</h3>
                <p>Creates a gigantic wave of sound in front of Queen of Pain, dealing heavy damage to all enemy units in its wake.</p>
              </div>
            </div>

            
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myQPS" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myQPS" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRubick">
    <img src="img/Rubick/Rubick.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myRubick">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Rubick)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myRubicks" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myRubicks" data-slide-to="0" class="active"></li>
              <li data-target="#myRubicks" data-slide-to="1"></li>
              <li data-target="#myRubicks" data-slide-to="2"></li>
              <li data-target="#myRubicks" data-slide-to="3"></li>
              <li data-target="#myRubicks" data-slide-to="4"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Rubick/skill1.png">
                  <div class="carousel-caption">
                    <h3>Telekinesis</h3>
                    <p>Rubick uses his telekinetic powers to lift the enemy into the air brieftly and then hurls them back at the ground.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Rubick/skill2.png">
              <div class="carousel-caption">
                <h3>Telekinesis Land</h3>
                <p>Choose the location the target will land when telekinesis finishes.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Rubick/skill3.png">
              <div class="carousel-caption">
                <h3>Fade Bolt</h3>
                <p>Rubick creates a powerful stream of arcane energy that travels between enemy units, dealing damage and reducing their attack damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Rubick/skill4.png">
              <div class="carousel-caption">
                <h3>Null Field</h3>
                <p>Rubick's mastery of the arcane creates an aura that nullifies nearby enemy senses or increases his own.</p>
              </div>
            </div>

             <div class="item">
              <img src="img/Rubick/skill5.png">
              <div class="carousel-caption">
                <h3>Spell Steal</h3>
                <p>Rubick studies the trace magical essence of one enemy hero, learning the secrets of the last spell the hero cast.</p>
              </div>
            </div>

            
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myRubicks" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myRubicks" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myShadow">
    <img src="img/ShadowDemon/Shadow.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myShadow">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Shadow Demon)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myShadows" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myShadows" data-slide-to="0" class="active"></li>
              <li data-target="#myShadows" data-slide-to="1"></li>
              <li data-target="#myShadows" data-slide-to="2"></li>
              <li data-target="#myShadows" data-slide-to="3"></li>
              <li data-target="#myShadows" data-slide-to="4"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/ShadowDemon/skill1.png">
                  <div class="carousel-caption">
                    <h3>Disruption</h3>
                    <p>Banishes the targeted unit from the battlefield for a short duration.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/ShadowsDemon/skill2.png">
              <div class="carousel-caption">
                <h3>Soul Catcher</h3>
                <p>Captures the soul of a random enemy in an area, amplifies all damages they take.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/ShadowDemon/skill3.png">
              <div class="carousel-caption">
                <h3>Shadow Poison</h3>
                <p>Deals damage in a line, and afflicts enemy units with a poison effect.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/ShadowDemon/skill4.png">
              <div class="carousel-caption">
                <h3>Shadow Poison Release</h3>
                <p>Releases the poison to do damage on all affected enemies.</p>
              </div>
            </div>

             <div class="item">
              <img src="img/ShadowDemon/skill5.png">
              <div class="carousel-caption">
                <h3>Demonic Purge</h3>
                <p>Purges the target enemy unit, removing positive buffs, and slowing the target for the duration.</p>
              </div>
            </div>

            
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myShadows" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myShadows" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRasta">
    <img src="img/ShadowShaman/Shadow.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myRasta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Shadow Shaman)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myRastas" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myRastas" data-slide-to="0" class="active"></li>
              <li data-target="#myRastas" data-slide-to="1"></li>
              <li data-target="#myRastas" data-slide-to="2"></li>
              <li data-target="#myRastas" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/ShadowShaman/skill1.png">
                  <div class="carousel-caption">
                    <h3>Ether Shock</h3>
                    <p>Creates a cone of ethereal energy that strikes multiple enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/ShadowShaman/skill2.png">
              <div class="carousel-caption">
                <h3>Hex</h3>
                <p>Transform an enemy unit into a harmless creature, disabling their attacks and abilities.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/ShadowShaman/skill3.png">
              <div class="carousel-caption">
                <h3>Shackles</h3>
                <p>Magically binds an enemy unit so that it cannot move or attack, while dealing damage over time.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/ShadowShaman/skill4.png">
              <div class="carousel-caption">
                <h3>Mass Serpent Ward</h3>
                <p>Summons 10 Serpent Wards to attack enemy units and structures.</p>
              </div>
            </div>

            

            
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myRastas" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myRastas" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySilencer">
    <img src="img/Silencer/Silencer.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myRasta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Silencer)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySilencers" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySilencers" data-slide-to="0" class="active"></li>
              <li data-target="#mySilencers" data-slide-to="1"></li>
              <li data-target="#mySilencers" data-slide-to="2"></li>
              <li data-target="#mySilencers" data-slide-to="3"></li>
              <li data-target="#mySilencers" data-slide-to="4"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Silencer/skill1.png">
                  <div class="carousel-caption">
                    <h3>Intelligence Steal</h3>
                    <p>Silencer will permanently steals 2 intelligence from any enemy hero that dies within 925 range or is killed by the Silencer.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Silencer/skill2.png">
              <div class="carousel-caption">
                <h3>Arcane Curse</h3>
                <p>Curses the target area, causing enemy heroes to take damage and slowing their movement speed.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Silencer/skill3.png">
              <div class="carousel-caption">
                <h3>Glaives of Wisdom</h3>
                <p>Silencer enchants his glaives with his wisdom, dealing additional damage based on his Intelligence.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Silencer/skill4.png">
              <div class="carousel-caption">
                <h3>Last Word</h3>
                <p>Enchants a target , causing them to be damaged and silenced. if they.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Silencer/skill5.png">
              <div class="carousel-caption">
                <h3>Global Silence</h3>
                <p>Silencer stops all sounds, preventing enemy heroes and units on the map from casting spells .</p>
              </div>
            </div>

            

            
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySilencers" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySilencers" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySky">
    <img src="img/SkywrathMage/Sky.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="mySky">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Skywrath Mage)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="mySkys" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySkys" data-slide-to="0" class="active"></li>
              <li data-target="#mySkys" data-slide-to="1"></li>
              <li data-target="#mySkys" data-slide-to="2"></li>
              <li data-target="#mySkys" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/SkywrathMage/skill1.png">
                  <div class="carousel-caption">
                    <h3>Arcane Bolt</h3>
                    <p>Skywrath Mage launches a slow-moving bolt of arcane magic, dea;ing damage to an enemy unit based on Skywrath Mage's intelligence.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/SkywrathMage/skill2.png">
              <div class="carousel-caption">
                <h3>Concussive Shot</h3>
                <p>Skywrath Mage sets off a long range shot that hits the closest hero within a long range.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/SkywrathMage/skill3.png">
              <div class="carousel-caption">
                <h3>Ancient Seal</h3>
                <p>Skywrath Mage seals the target unit with an ancient rune, silencing it and causing it to take additional damage from spells.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/SkywrathMage/skill4.png">
              <div class="carousel-caption">
                <h3>Mystic Flare</h3>
                <p>Skywrath Mage uses his ultimate magical ability to conjure a precise and violent mystical field that lays waste to his adversaries.</p>
              </div>
            </div>    
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySkys" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySkys" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myStorm">
    <img src="img/StormSpirit/Storm.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myStorm">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Storm Spirit)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myStorms" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myStorms" data-slide-to="0" class="active"></li>
              <li data-target="#myStorms" data-slide-to="1"></li>
              <li data-target="#myStorms" data-slide-to="2"></li>
              <li data-target="#myStorms" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/StormSpirit/skill1.png">
                  <div class="carousel-caption">
                    <h3>Static Remnant</h3>
                    <p>Creates an explosively charged image of Storm Spirit that lasts 12 seconds and will detonate and deal damage if an enemy unit comes near it.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/StormSpirit/skill2.png">
              <div class="carousel-caption">
                <h3>Electric Vortex</h3>
                <p>A vortex that pulls an enemy unit to Storm Spirit's location.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/StormSpirit/skill3.png">
              <div class="carousel-caption">
                <h3>Overload</h3>
                <p>Casting a spell creates an electrical charge, which is released in a burst on his next attack.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/StormSpirit/skill4.png">
              <div class="carousel-caption">
                <h3>Ball Lightning</h3>
                <p>Storm Spirit becomes volatile electricity, charging across the battlefield until he depletes his mana or reaches his target.</p>
              </div>
            </div>    
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myStorms" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myStorms" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTechies">
    <img src="img/Techies/Techies.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myTechies">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Techies)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTechiess" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTechiess" data-slide-to="0" class="active"></li>
              <li data-target="#myTechiess" data-slide-to="1"></li>
              <li data-target="#myTechiess" data-slide-to="2"></li>
              <li data-target="#myTechiess" data-slide-to="3"></li>
              <li data-target="#myTechiess" data-slide-to="4"></li>
              <li data-target="#myTechiess" data-slide-to="5"></li>
              <li data-target="#myTechiess" data-slide-to="6"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Techies/skill1.png">
                  <div class="carousel-caption">
                    <h3>Proximity Mines</h3>
                    <p>Plants an invinsible mine that cannot be detected by True Sight.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Techies/skill2.png">
              <div class="carousel-caption">
                <h3>Statis Trap</h3>
                <p>Plnat an invinsible trap that roots nearby enemy units instantly when triggered.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Techies/skill3.png">
              <div class="carousel-caption">
                <h3>Blast Off</h3>
                <p>Techies hurtle themselves into the enemy's midst, detonating charge upon impact.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Techies/skill4.png">
              <div class="carousel-caption">
                <h3>Minefield Sign</h3>
                <p>Plant warning signs to remind enemies to step lightly.</p>
              </div>
            </div> 

             <div class="item">
              <img src="img/Techies/skill5.png">
              <div class="carousel-caption">
                <h3>Remote Mines</h3>
                <p>Plant an invinsible explosive that will only detonate after a brief delay when triggered.</p>
              </div>
            </div>   

             <div class="item">
              <img src="img/Techies/skill6.png">
              <div class="carousel-caption">
                <h3>Focused Detonate</h3>
                <p>Detonate all remote mines in the target.</p>
              </div>
            </div>        
        
         <div class="item">
              <img src="img/Techies/skill7.png">
              <div class="carousel-caption">
                <h3>Pinpoint Detonate</h3>
                <p>Detonate all selected remote mines.</p>
              </div>
            </div>    
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTechiess" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTechiess" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myTinker">
    <img src="img/Tinker/Tinker.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myTinker">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Tinker)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myTinkers" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myTinkers" data-slide-to="0" class="active"></li>
              <li data-target="#myTinkers" data-slide-to="1"></li>
              <li data-target="#myTinkers" data-slide-to="2"></li>
              <li data-target="#myTinkers" data-slide-to="3"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Tinker/skill1.png">
                  <div class="carousel-caption">
                    <h3>Laser</h3>
                    <p>Fires an intense energy beam, dealing damage and blinding the target, causing it to miss all physical attacks.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Tinker/skill2.png">
              <div class="carousel-caption">
                <h3>Heat -Seeking Missile</h3>
                <p>Launches a pair of rockets at hte nearest visible enemy heroes within 2500 range.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tinker/skill3.png">
              <div class="carousel-caption">
                <h3>March of the Machines</h3>
                <p>Enlist an army of robotic minions to destroy enemy units in an area around Tinker.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Tinker/skill4.png">
              <div class="carousel-caption">
                <h3>Rearm</h3>
                <p>Resets the cooldown on most of Tinker's items and abilities.</p>
              </div>
            </div>    
        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myTinkers" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myTinkers" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myVisage">
    <img src="img/Visage/Visage.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myVisage">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Visage)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myVisages" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myVisages" data-slide-to="0" class="active"></li>
              <li data-target="#myVisages" data-slide-to="1"></li>
              <li data-target="#myVisages" data-slide-to="2"></li>
              <li data-target="#myVisages" data-slide-to="3"></li>
              <li data-target="#myVisages" data-slide-to="4"></li>



            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Visage/skill1.png">
                  <div class="carousel-caption">
                    <h3>Grave Chill</h3>
                    <p>Visage drains the movement and attack speed of the target unit, gaining it for itself.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Visage/skill2.png">
              <div class="carousel-caption">
                <h3>Soul Assumption</h3>
                <p>Visage gathers charges of souls essence each time nearby heroes takes more that 110 damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Visage/skill3.png">
              <div class="carousel-caption">
                <h3>Gravekeepers's Cloak</h3>
                <p>Visage generates a layered barrier that protects him from damage.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Visage/skill4.png">
              <div class="carousel-caption">
                <h3>Summon Familiars</h3>
                <p>Conjures two blind familiars to fight for visage.</p>
              </div>
            </div>    

            <div class="item">
              <img src="img/Visage/skill5.png">
              <div class="carousel-caption">
                <h3>Stone Form</h3>
                <p>After a short delay, the familiar turns into stone and smashes into the ground, stunning and damaging all target in the area.</p>
              </div>
            </div>    


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myVisages" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myVisages" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myWarlock">
    <img src="img/Warlock/Warlock.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myWarlock">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Warlock)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWarlocks" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWarlocks" data-slide-to="0" class="active"></li>
              <li data-target="#myWarlocks" data-slide-to="1"></li>
              <li data-target="#myWarlocks" data-slide-to="2"></li>
              <li data-target="#myWarlocks" data-slide-to="3"></li>
              <li data-target="#myWarlocks" data-slide-to="4"></li>




            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Warlock/skill1.png">
                  <div class="carousel-caption">
                    <h3>Fatal Bonds</h3>
                    <p>Binds several enemy unit together, causing a percentage of the damage dealt to one of them to be felt by the others.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Warlock/skill2.png">
              <div class="carousel-caption">
                <h3>Shadow Word</h3>
                <p>Warlock whispers an incantation, healing a friendly unit or damaging an enemy unit over time.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Warlock/skill3.png">
              <div class="carousel-caption">
                <h3>Upheaval</h3>
                <p>Apowerful slowing current that grows stronger as it's channeled.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Warlock/skill4.png">
              <div class="carousel-caption">
                <h3>Chaotic Offering</h3>
                <p>Summons a golem from the depths, stunning enemies for one second.</p>
              </div>
            </div>    

            <div class="item">
              <img src="img/Warlock/skill4.png">
              <div class="carousel-caption">
                <h3>Flamming Fist</h3>
                <p>Deals extra damage to nearby units when attacking.</p>
              </div>
            </div>    


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWarlock" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWarlock" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myWind">
    <img src="img/Windranger/Windranger.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myWind">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Windranger)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWinds" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWinds" data-slide-to="0" class="active"></li>
              <li data-target="#myWinds" data-slide-to="1"></li>
              <li data-target="#myWinds" data-slide-to="2"></li>
              <li data-target="#myWinds" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Windranger/skill1.png">
                  <div class="carousel-caption">
                    <h3>Shackleshots</h3>
                    <p>Shackles the target to an enemy unit or tree in a line directly behind .</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Windranger/skill2.png">
              <div class="carousel-caption">
                <h3>Powershot</h3>
                <p>Windranger charges her bow for up to 1 second for a single powerful shot, which deals more damage the longer it is charged.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Windranger/skill3.png">
              <div class="carousel-caption">
                <h3>Windrun</h3>
                <p>Increases movement speed and adds evasion from all physical attacks.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Windranger/skill4.png">
              <div class="carousel-caption">
                <h3>Focus Fire</h3>
                <p>Windranger channels the wind to gain 400 additional attack speed against a single enemy unit or structure.</p>
              </div>
            </div>    

             


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWinds" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWinds" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myWinter">
    <img src="img/WinterWyvern/WinterWyvern.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myWinter">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Winter Wyvern)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWinters" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWinters" data-slide-to="0" class="active"></li>
              <li data-target="#myWinters" data-slide-to="1"></li>
              <li data-target="#myWinters" data-slide-to="2"></li>
              <li data-target="#myWinters" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/WinterWyvern/skill1.png">
                  <div class="carousel-caption">
                    <h3>Arctic Burn</h3>
                    <p>Winter Wyvern soars upon an arctic wind, granting her unobstructed movement and allowing her to exhale a blistering chill into each attack.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/WinterWyvern/skill2.png">
              <div class="carousel-caption">
                <h3>Splinter Blast</h3>
                <p>Launches a ball of brittle ice towards an enemy.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/WinterWyvern/skill3.png">
              <div class="carousel-caption">
                <h3>Cold Embrace</h3>
                <p>Encases an ally in an icy cocoon, freezing them solid while healing a base amount as well as a percentage of their maximum health each second.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/WinterWyvern/skill4.png">
              <div class="carousel-caption">
                <h3>Winter's Curse</h3>
                <p>Winter Wyvern freezes an enemy in place while striking those nearby with a maddening curse which causes them to attack their frozen ally with increased attack speed.</p>
              </div>
            </div>    

             


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWinters" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWinters" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myWitch">
    <img src="img/WitchDoctor/WitchDoctor.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myWitch">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Witch Doctor)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myWitchs" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myWitches" data-slide-to="0" class="active"></li>
              <li data-target="#myWitches" data-slide-to="1"></li>
              <li data-target="#myWitches" data-slide-to="2"></li>
              <li data-target="#myWitches" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/WitchDoctor/skill1.png">
                  <div class="carousel-caption">
                    <h3>Paralyzing Cask</h3>
                    <p>Launches a cask of paralyzing powder that ricochets between enemy units .</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/WitchDoctor/skill2.png">
              <div class="carousel-caption">
                <h3>Voodoo Restoration</h3>
                <p>Witch Doctor focuses his magic to heal nearby allied units.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/WitchDoctor/skill3.png">
              <div class="carousel-caption">
                <h3>Maledict</h3>
                <p>Curses all enemy Heroes in a small area, causing them to take a set amount of damage each second .</p>
              </div>
            </div>

            <div class="item">
              <img src="img/WitchDoctor/skill4.png">
              <div class="carousel-caption">
                <h3>Death Ward</h3>
                <p>Summons a deadly ward to attack enemy heroes within 700 range.</p>
              </div>
            </div>    

             


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myWitches" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myWitches" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myZeus">
    <img src="img/Zeus/Zeus.png" width="90" height="50">
  </button>

        <!-- The Modal -->
  <div class="modal fade" id="myZeus">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Skills(Zeus)</h2>       
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <div id="myZeuss" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myZeuss" data-slide-to="0" class="active"></li>
              <li data-target="#myZeuss" data-slide-to="1"></li>
              <li data-target="#myZeuss" data-slide-to="2"></li>
              <li data-target="#myZeuss" data-slide-to="3"></li>
              <li data-target="#myZeuss" data-slide-to="4"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Zeus/skill1.png">
                  <div class="carousel-caption">
                    <h3>Arc Lightning</h3>
                    <p>Hurls a bolt of lightning that leaps through nearby enemy units.</p>
                    </div>
              </div>

            <div class="item">
              <img src="img/Zeus/skill2.png">
              <div class="carousel-caption">
                <h3>Lightning Bolt</h3>
                <p>Calls down a bolt of lightning to strike an enemy unit, causing damage and a mini-stun.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Zeus/skill3.png">
              <div class="carousel-caption">
                <h3>Static Field</h3>
                <p>Zeus shocks all nearby enemy units whenever he cast a spell, causing damage proportional to their current health.</p>
              </div>
            </div>

            <div class="item">
              <img src="img/Zeus/skill4.png">
              <div class="carousel-caption">
                <h3>Thundergod's Wrath</h3>
                <p>Strikes all enemy heroes with a bolt of lightning no matter where they may be.</p>
              </div>
            </div>    

            <div class="item">
              <img src="img/Zeus/skill5.png">
              <div class="carousel-caption">
                <h3>Nimbus</h3>
                <p>Creates a storm cloud anywhere on the map that automatically casts Lightning Bolt on nearby enemies.</p>
              </div>
            </div>    

             


        
         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myZeuss" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myZeuss" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>










</div>
</div>
</body>
</html>
