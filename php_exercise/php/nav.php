<nav>
                    <p>POSTS:</p>
                    <!-- section 1 menu-->
                    <a class="sectiontitle" <?php if ($thisSection=="SECTION1") echo " id=\"currentsection\""; ?>> Section 1 </a>
                    <ul>
                        <li><a href="/section1/artem.php" <?php if ($thisPage=="Artem Kostyukevich") echo " id=\"currentpage\""; ?>> Artem Kostyukevich</a></li>
                        <li><a href="/section1/PG2_S1.php" <?php if ($thisPage=="Malika_Favre") echo " id=\"currentpage\""; ?>>Malika Favre</a></li>
                        <li><a href="/section1/pg3_s1.php" <?php if ($thisPage=="Jean_Jullien") echo " id=\"currentpage\""; ?>>Jean Jullien</a></li>

                    </ul>
                    
                    <!-- section 2 menu-->
                    <a class="sectiontitle" <?php if ($thisSection=="SECTION2") echo " id=\"currentsection\""; ?>>Section 2</a>
                    <ul>
                        <li><a href="/section2/pg1_s2.php"<?php if ($thisPage=="Raja_Ravi_Verma") echo " id=\"currentpage\""; ?>>Raja Ravi Verma</a></li>
                        <li><a href="/section2/pg2_s2.php"<?php if ($thisPage=="Amrita_sher_gil") echo " id=\"currentpage\""; ?>>Amrita Sher Gil</a></li>
                        <li><a href="/section2/jamini_roy.php"<?php if ($thisPage=="Jamini_Roy") echo " id=\"currentpage\""; ?>>Jamini Roy</a></li>
                    </ul>         

                    <a href="">About</a>

                </nav>