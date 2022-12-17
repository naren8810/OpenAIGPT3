<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="generator" content="AlterVista - Editor HTML" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title></title>
</head>

<body>
    <!-- <b>Your API key (remains hidden to me): </b><input id="userapikey" value=""  /> -->
    <br>

    <!-- <div id="divchatbot" style='border-style: solid; position: fixed; bottom: 10px; left:2%; width:96%; text-align: center; z-index: 1000; background-color: rgba(200, 200, 200, 1); visibility: visible; height: 200px; overflow-y : scroll; '> -->
    <div id="divchatbot" style='border-style: solid; bottom: 10px; left:2%; width:96%; text-align: center; z-index: 1000; background-color: rgba(200, 200, 200, 1); visibility: visible; height: 200px; overflow-y : scroll; '>
        <p align=left>
            <button type="button" onclick="chatbotprocessinput()" title="" id="chatbotbutton">
                <font size=4>Send</font>
            </button>
            <button type="button" onclick="document.getElementById('divchatbot').style.visibility = 'hidden' ; document.getElementById('divchatbotoff').style.visibility = 'visible'" title="" id="chatbotbutton">
                <font size=4>Close</font>
            </button>
            <input id="chatuserinput" value="DALLAS" style="font-size:20px;" placeholder="Type here to chat with bot" onkeydown="if (event.keyCode == 13) { chatbotprocessinput() }  ;  if (event.keyCode == 38) { repeatuser() }"></input>
        </p>
        <p id="chatlog" align=left style="width:95%; word-wrap:break-word;"><br><b>Assistant:</b> Hello, welcome to OpenAI website. I'm here representing OpenAI online. Feel free to ask any questions...</p>
    </div>

    <script>
        /*var prompt = "Hello, welcome to Luciano Abriata's website. I'm here representing Luciano online. I know a lot about him -I'm an OpenAI GPT-3 model extended with hundreds of texts written by Luciano. Feel free to ask any questions. Dr. Luciano A. Abriata is a biotechnologist, doctor in chemistry, artist and content creator. On science subjects, Luciano has experience in the experimental and computational aspects of structural biology, biophysics, protein biotechnology, molecular visualization through augmented and virtual realities, and science education using modern technologies. Luciano Abriata was born in Rosario, Argentina, in 1981. He studied biotechnology and chemistry in Argentina, and then moved to Switzerland where he currently works in two laboratories at the Ecole Polytechnique Federale de Lausanne (EPFL). He works at EPFL's Laboratory for Biomolecular Modeling, and at EPFL's Protein Production and Structure Core Facility. He currently works on web-based methods to achieve commodity augmented reality and virtual reality tools for viewing and manipulating molecular structures immersively. He also works in collaboration with multiple groups on molecular modeling, simulation, and nuclear magnetic resonance (NMR) spectroscopy applied to biological systems.";

        prompt = prompt + "Article title: MoleculARweb: a website for chemistry and structural biology education through interactive augmented reality out of the box in commodity devices (Journal of Chemical Education, 2021: https://pubs.acs.org/doi/10.1021/acs.jchemed.1c00179). Text: moleculARweb (https://molecularweb.epfl.ch) began as a website for education and outreach in chemistry and structural biology through augmented reality (AR) content that runs in the web browsers of regular devices like smartphones, tablets, and computers. Here we present two evolutions of moleculARweb’s Virtual Modeling Kits (VMK), tools where users can build and view molecules, and explore their mechanics, in 3D AR by handling the molecules in full 3D with custom-printed cube markers (VMK 2.0) or by moving around a simulated scene with mouse or touch gestures (VMK 3.0). Upon simulation the molecules experience visually realistic torsions, clashes, and hydrogen-bonding interactions that the user can manually switch on and off to explore their effects. Moreover, by manually tuning a fictitious temperature the users can accelerate conformational transitions or 'freeze' specific conformations for careful inspection in 3D. Even some phase transitions and separations can be simulated. We here showcase these and other features of the new VMKs connecting them to possible specific applications to teaching and self-learning of concepts from general, organic, biological and physical chemistry; and in assisting with small tasks in molecular modelling for research. Last, in a short discussion section we overview what future developments are needed for the 'dream tool' for the future of chemistry education and work."

        var prompt = "On August 27, 1966, Biden married Neilia Hunter (1942–1972), a student at Syracuse University, after overcoming her parents' reluctance for her to wed a Roman Catholic. Their wedding was held in a Catholic church in Skaneateles, New York. They had three children: Joseph R. Beau Biden III (1969–2015), Robert Hunter Biden (born 1970), and Naomi Christina Amy Biden (1971–1972). ";

        prompt = prompt + "In 1968, Biden earned a Juris Doctor from Syracuse University College of Law, ranked 76th in his class of 85, after failing a course due to an acknowledged mistake when he plagiarized a law review article for a paper he wrote in his first year at law school. He was admitted to the Delaware bar in 1969.";

        prompt = prompt + "Biden had not openly supported or opposed the Vietnam War until he ran for Senate and opposed Nixon's conduct of the war. While studying at the University of Delaware and Syracuse University, Biden obtained five student draft deferments, at a time when most draftees were sent to the Vietnam War. In 1968, based on a physical examination, he was given a conditional medical deferment; in 2008, a spokesperson for Biden said his having had asthma as a teenager was the reason for the deferment.In 1968, Biden clerked at a Wilmington law firm headed by prominent local Republican William Prickett and, he later said, thought of myself as a Republican. He disliked incumbent Democratic Delaware governor Charles L. Terry's conservative racial politics and supported a more liberal Republican, Russell W. Peterson, who defeated Terry in 1968. Biden was recruited by local Republicans but registered as an Independent because of his distaste for Republican presidential candidate Richard Nixon.";

        prompt = prompt + "In 1969, Biden practiced law, first as a public defender and then at a firm headed by a locally active Democrat who named him to the Democratic Forum, a group trying to reform and revitalize the state party; Biden subsequently reregistered as a Democrat. He and another attorney also formed a law firm. Corporate law, however, did not appeal to him, and criminal law did not pay well. He supplemented his income by managing properties. In 1970, Biden ran for the 4th district seat on the New Castle County Council on a liberal platform that included support for public housing in the suburbs. The seat had been held by Republican Henry R. Folsom, who was running in the 5th District following a reapportionment of council districts. Biden won the general election by defeating Republican Lawrence T. Messick, and took office on January 5, 1971. He served until January 1, 1973, and was succeeded by Democrat Francis R. Swift. During his time on the county council, Biden opposed large highway projects, which he argued might disrupt Wilmington neighborhoods.";


        prompt = prompt + "In 1972, Biden defeated Republican incumbent J. Caleb Boggs to become the junior U.S. senator from Delaware. He was the only Democrat willing to challenge Boggs, and with minimal campaign funds, he was given no chance of winning. Family members managed and staffed the campaign, which relied on meeting voters face-to-face and hand-distributing position papers, an approach made feasible by Delaware's small size. He received help from the AFL–CIO and Democratic pollster Patrick Caddell. His platform focused on the environment, withdrawal from Vietnam, civil rights, mass transit, equitable taxation, health care, and public dissatisfaction with politics as usual. A few months before the election, Biden trailed Boggs by almost thirty percentage points, but his energy, attractive young family, and ability to connect with voters' emotions worked to his advantage and he won with 50.5 percent of the vote. At the time of his election, he was 29 years old, but he reached the constitutionally required age of 30 before he was sworn in as Senator.";

        prompt = prompt + "Death of wife and daughter On December 18, 1972, a few weeks after Biden was elected senator, his wife Neilia and one-year-old daughter Naomi were killed in an automobile accident while Christmas shopping in Hockessin, Delaware. Neilia's station wagon was hit by a semi-trailer truck as she pulled out from an intersection. Their sons Beau (aged 3) and Hunter (aged 2) were taken to the hospital in fair condition, Beau with a broken leg and other wounds and Hunter with a minor skull fracture and other head injuries. Biden considered resigning to care for them, but Senate Majority Leader Mike Mansfield persuaded him not to. The accident filled Biden with anger and religious doubt. He wrote that he felt God had played a horrible trick on him, and he had trouble focusing on work. After the truck driver passed away in 1999, Biden in 2001 and 2007 accused the truck driver of drinking before the crash, even though the truck driver was never charged, and the chief prosecutor investigating the case stated that there was no evidence of drunk driving. In 2008, Biden's spokesman said that Biden fully accepts that allegations of drunk driving were false. The truck driver's daughter said that Biden called her after a 2009 media report to apologize for hurting my family in any way.";

        prompt = prompt + "Second marriage. Biden and his second wife, Jill, met in 1975 and married in 1977.Biden met the teacher Jill Tracy Jacobs in 1975 on a blind date. They married at the United Nations chapel in New York on June 17, 1977. They spent their honeymoon at Lake Balaton in the Hungarian People's Republic. Biden credits her with the renewal of his interest in politics and life. They are Roman Catholics and attend Mass at St. Joseph's on the Brandywine in Greenville, Delaware. Their daughter Ashley Biden (born 1981) is a social worker. She is married to physician Howard Krein. Beau Biden became an Army Judge Advocate in Iraq and later Delaware Attorney General before dying of brain cancer in 2015. Hunter Biden is a Washington lobbyist and investment adviser.";

        prompt = prompt + "Teaching. From 1991 to 2008, as an adjunct professor, Biden co-taught a seminar on constitutional law at Widener University School of Law. The seminar often had a waiting list. Biden sometimes flew back from overseas to teach the class.";*/

        var prompt = "COMING TO DALLAS IN 2023. Lumin Fitness has developed a proprietary fitness ecosystem utilizing the latest advances in digital display, motion tracking and object detection to provide the most intelligent, interactive and individualized boutique fitness experience in the world.";

        prompt = prompt + "Our product combines the best of group fitness and personal training, leveraging technology to deliver personalization, gamification and progress tracking in ways never before seen in the fitness industry.";

        prompt = prompt + "The intelligent programming behind our classes is scientifically proven, data-backed and delivered in a shared, sensory-driven environment that changes daily and evolves over time.";

        prompt = prompt + "We are dedicated to unique, interactive workouts that allow participants to become immersed in the experience around them while also achieving their individual goals.";

        prompt = prompt + "Website http://lumin.fitness/ Industry Wellness and Fitness Services Company size 11-50 employees 6 on LinkedIn Includes members with current employer listed as Lumin Fitness, including part-time roles."

        prompt = prompt + "Headquarters Dallas, Texas Founded 2019 Specialties Technology, Fitness, Innovation, High Intensity Functional Training, Group Training, Personal Training, Franchising, Fitness Content, and Fitness Gamification ";


        var chatbotprocessinput = function() {
            // var apikey = "Bearer " + document.getElementById("userapikey").value
            var apikey = '';
            theprompt = prompt + "Q: " + document.getElementById("chatuserinput").value
            document.getElementById("chatuserinput").value = ""
            document.getElementById("chatlog").innerHTML = "Thinking..."
            $.ajax({
                url: "gpt3withyourapikey.php?prompt=" + theprompt + "&apikey=" + apikey
            }).done(function(data) {
                console.log(data)
                var textupdate = data.replace(prompt, "").replace("https://api.openai.com/v1/engines/text-davinci-002/completions", "")
                document.getElementById("chatlog").innerHTML = textupdate.replace(/Q: /g, "<br><b>Visitor: </b>").replace(/A: /g, "<br><br><b>Assistant: </b>")
                prompt = data.replace("https://api.openai.com/v1/engines/text-davinci-002/completions", "")
                console.log("------\n" + prompt)
            });
        }
    </script>

</body>

</html>