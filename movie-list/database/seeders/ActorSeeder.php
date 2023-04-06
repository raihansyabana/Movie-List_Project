<?php

namespace Database\Seeders;

use App\Models\Actor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::create([
            'name' => 'Jenna Ortega',
            'gender'  => 'Female',
            'biography' => 'Jenna Marie Ortega was born on September 27, 2002, in Coachella Valley, California. Jenna began acting at the age of nine and has portrayed the role of Harley, a creative engineering prodigy navigating life as the middle child in a family of seven children, in "Stuck in the Middle," a Disney Channel series told from Harley\'s perspective.',
            'dob' => Carbon::create('2002-09-27'),
            'pob' => 'Coachella Valley, California',
            'image' => 'images/actor/jenna-ortega.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Emma Myers',
            'gender'  => 'Female',
            'biography' => 'Emma Myers was born on 2 April 2002 in the United States. She is an actress, known for Wednesday (2022), Girl in the Basement (2021) and A Taste of Christmas (2020).',
            'dob' => Carbon::create('2002-04-02'),
            'pob' => 'United States',
            'image' => 'images/actor/emma-myers.jpg',
            'popularity' => 500
        ]);

        Actor::create([
            'name' => 'Hunter Doohan',
            'gender'  => 'Male',
            'biography' => 'Hunter Doohan was born in Fort Smith, Arkansas, USA. He is an actor and writer, known for Wednesday (2022), Your Honor (2020) and Truth Be Told (2019). He has been married to Fielder Jewett since December 31, 2020.',
            'dob' => Carbon::create('1994-01-18'),
            'pob' => 'Fort Smith, Arkansas, USA',
            'image' => 'images/actor/hunter-doohan.jpg',
            'popularity' => 500
        ]);

        Actor::create([
            'name' => 'Keanu Reeves',
            'gender'  => 'Male',
            'biography' => "Keanu Charles Reeves, whose first name means 'cool breeze over the mountains' in Hawaiian, was born September 2, 1964 in Beirut, Lebanon. He is the son of Patricia Taylor, a showgirl and costume designer, and Samuel Nowlin Reeves, a geologist. Keanu's father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry, and Keanu's mother is originally from England. After his parents' marriage dissolved, Keanu moved with his mother and younger sister, Kim Reeves, to New York City, then Toronto.",
            'dob' => Carbon::create('1964-11-02'),
            'pob' => 'Beirut, Lebanon',
            'image' => 'images/actor/keanu-reeves.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Michael Nyqvist',
            'gender'  => 'Male',
            'biography' => "Born Rolf Åke Mikael Nyqvist in Stockholm, Sweden, it wasn't until he was over a year old when he was finally adopted from the orphanage he had been given to. His father was a lawyer and his mother a writer. It wasn't until he had his first child that he decided to seek out his biological parents. After a long journey, he met his biological mother who is Swedish and is now close to his biological father who is Italian and a pharmacist.Acting wasn't always originally on the agenda for Nyqvist.",
            'dob' => Carbon::create('1960-09-08'),
            'pob' => 'Stockholm, Stockholms Ian, Sweden',
            'image' => 'images/actor/michael-nyqvist.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Willem Dafoe',
            'gender'  => 'Male',
            'biography' => "Having made over one hundred films in his legendary career, Willem Dafoe is internationally respected for bringing versatility, boldness, and daring to some of the most iconic films of our time. His artistic curiosity in exploring the human condition leads him to projects all over the world, large and small, Hollywood films as well as Independent cinema.In 1979, he was given a role in Michael's Cimino's Heaven's Gate, from which he was fired.",
            'dob' => Carbon::create('1955-07-22'),
            'pob' => 'Appleton, Wisconsin, USA',
            'image' => 'images/actor/willem-dafoe.jpg',
            'popularity' => 1500
        ]);

        Actor::create([
            'name' => 'Ian McShane',
            'gender'  => 'Male',
            'biography' => "A natural at portraying complex anti-heroes and charming heavies, Ian McShane is the classically trained, award-winning actor who has grabbed attention and acclaim from audiences and critics around the world with his unforgettable gallery of scoundrels, kings, mobsters and thugs.And, now, a god as well!McShane just completed his third season (as star and executive producer) on the hit Starz series, 'American Gods,' the TV adaptation of Neil Gaiman's 2001 novel.",
            'dob' => Carbon::create('1942-09-29'),
            'pob' => 'Blackburn, Lancashire, England, UK' ,
            'image' => 'images/actor/ian-mcshane.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Common',
            'gender'  => 'Male',
            'biography' => "First known as a rapper who became one of the more prominent voices in hip-hop's new millennium renaissance, Common later transitioned into acting. He was born in Chicago, and is the son of educator Dr. Mahalia Ann Hines and Lonnie Lynn, an ABA basketball player turned youth counselor.On October 6, 1992, Common released his first LP, 'Can I Borrow A Dollar?' under the Common Sense moniker. ",
            'dob' => Carbon::create('1972-03-13'),
            'pob' => 'Chicago, Illinois, USA' ,
            'image' => 'images/actor/common.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Lance Reddick',
            'gender'  => 'Male',
            'biography' => "Lance Reddick is an American actor and musician. He is best known for playing Cedric Daniels in The Wire and Phillip Broyles in Fringe. He is also known for portraying Detective Johnny Basil on Oz, Matthew Abaddon in Lost, Charon in the John Wick franchise and Guillermin in Godzilla vs. Kong. He has provided the voice and likeness for video game characters Martin Hatch in Quantum Break, Sylens in Horizon Zero Dawn and Horizon Forbidden West, and Commander Zavala in the Destiny franchise.",
            'dob' => Carbon::create('1962-06-07'),
            'pob' => 'Baltimore, Maryland, USA' ,
            'image' => 'images/actor/lance-reddick.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Asia Kate Dillon',
            'gender'  => 'Female',
            'biography' => "Asia Kate Dillon was born on November 15, 1984 in Ithaca, New York, USA. They are known for playing Brandy Epps in Orange Is the New Black (2013) and Taylor Mason in Billions (2016). Their role on Billions is the first gender non-binary character shown on American television. Dillon is non-binary and uses singular they pronouns. Dillon is also the founder and the producing director of MIRROR/FIRE Productions.",
            'dob' => Carbon::create('1984-11-15'),
            'pob' => 'Ithacha, New York, USA' ,
            'image' => 'images/actor/asia-kate.jpg',
            'popularity' => 600
        ]);

        Actor::create([
            'name' => 'Laurence Fishburne',
            'gender'  => 'Male',
            'biography' => "Critically hailed for his forceful, militant, authoritative figures and one of Hollywood's most talented and versatile performers, Laurence (John) Fishburne III has been the recipient of numerous awards, including a number of NAACP Image honors.Born in Augusta, Georgia on July 30, 1961, to Hattie Bell (Crawford), a teacher, and Laurence John Fishburne, Jr., a juvenile corrections officer. His mother transplanted her family to Brooklyn after his parents divorced. At the age of 10, the young boy appeared in his first play, 'In My Many Names and Days,' at a cramped little theater space in Manhattan.",
            'dob' => Carbon::create('1961-07-30'),
            'pob' => 'Augusta, Georgia, USA' ,
            'image' => 'images/actor/laurence-fishburne.jpg',
            'popularity' => 1700
        ]);

        Actor::create([
            'name' => 'Halle Berry',
            'gender'  => 'Female',
            'biography' => "Halle Maria Berry was born Maria Halle Berry on August 14, 1966 in Cleveland, Ohio and raised in Bedford, Ohio to Judith Ann (Hawkins), a psychiatric nurse, and Jerome Jesse Berry, a hospital attendant. Her father was African-American and her mother is of mostly English and German descent. Halle first came into the spotlight at seventeen years when she won the Miss Teen All-American Pageant, representing the state of Ohio in 1985 and, a year later in 1986, when she was the first runner-up in the Miss U.S.A. Pageant.",
            'dob' => Carbon::create('1966-08-14'),
            'pob' => 'Cleveland, Ohio, USA' ,
            'image' => 'images/actor/halle-berry.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Tom Cruise',
            'gender'  => 'Male',
            'biography' => "In 1976, if you had told fourteen-year-old Franciscan seminary student Thomas Cruise Mapother IV that one day in the not too distant future he would be Tom Cruise, one of the top 100 movie stars of all time, he would have probably grinned and told you that his ambition was to join the priesthood. Nonetheless, this sensitive, deeply religious youngster who was born in 1962 in Syracuse, New York, was destined to become one of the highest paid and most sought after actors in screen history.",
            'dob' => Carbon::create('1962-07-03'),
            'pob' => 'Syracuse, New York, USA' ,
            'image' => 'images/actor/tom-cruise.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Jennifer Connelly',
            'gender'  => 'Female',
            'biography' => "Jennifer Connelly was born in the Catskill Mountains, New York, to Ilene (Schuman), a dealer of antiques, and Gerard Connelly, a clothing manufacturer. Her father had Irish and Norwegian ancestry, and her mother was from a Jewish immigrant family. Jennifer grew up in Brooklyn Heights, just across the Brooklyn Bridge from Manhattan, except for the four years her parents spent in Woodstock, New York. Back in Brooklyn Heights, she attended St. Ann's school. A close friend of the family was an advertising executive. When Jennifer was ten, he suggested that her parents take her to a modeling audition.",
            'dob' => Carbon::create('1970-12-12'),
            'pob' => 'Catskill Mountains, New York, USA' ,
            'image' => 'images/actor/jennifer-connelly.jpg',
            'popularity' => 1400
        ]);

        Actor::create([
            'name' => 'Miles Teller',
            'gender'  => 'Male',
            'biography' => "Miles Alexander Teller is an American actor and musician. For his performance in the film The Spectacular Now (2013), he won the Dramatic Special Jury Award for Acting at the 2013 Sundance Film Festival. He has appeared in the films Rabbit Hole (2010), Footloose (2011), Project X (2012), That Awkward Moment (2014), Divergent (2014), Two Night Stand (2014), Whiplash (2014).",
            'dob' => Carbon::create('1987-02-20'),
            'pob' => 'Downingtown, Pennsylvania, USA' ,
            'image' => 'images/actor/miles-teller.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Tom Holland',
            'gender'  => 'Male',
            'biography' => "Thomas Stanley Holland was born in Kingston-upon-Thames, Surrey, to Nicola Elizabeth (Frost), a photographer, and Dominic Holland (Dominic Anthony Holland), who is a comedian and author. His paternal grandparents were from the Isle of Man and Ireland, respectively. He lives with his parents and three younger brothers - Paddy and twins Sam and Harry. Tom attended Donhead Prep School. ",
            'dob' => Carbon::create('1996-06-01'),
            'pob' => 'Kingston upon Thames, England, UK' ,
            'image' => 'images/actor/tom-holland.jpg',
            'popularity' => 1800
        ]);

        Actor::create([
            'name' => 'Jake Gyllenhaal',
            'gender'  => 'Male',
            'biography' => "Jake Gyllenhaal was born on December 19, 1980 in Los Angeles, California as Jacob Benjamin Gyllenhaal, the son of producer/screenwriter Naomi Foner and director Stephen Gyllenhaal, and the younger brother of actress Maggie Gyllenhaal. He is of Ashkenazi Jewish (mother) and Swedish, English, and German (father) descent.He made his movie debut at 11 in City Slickers (1991). From the late 1990s through the early 2000s, he starred in October Sky (1999) & Donnie Darko (2001), receiving an Independent Spirit Award Best Actor nomination for the latter.",
            'dob' => Carbon::create('1980-12-19'),
            'pob' => 'Lost Angeles, California, USA' ,
            'image' => 'images/actor/jake-gyllenhaal.jpg',
            'popularity' => 900
        ]);

        Actor::create([
            'name' => 'Samuel L. Jackson',
            'gender'  => 'Male',
            'biography' => "Samuel L. Jackson is an American producer and highly prolific actor, having appeared in over 100 films, including Die Hard with a Vengeance (1995), Unbreakable (2000), Shaft (2000), Formula 51 (2001), Black Snake Moan (2006), Snakes on a Plane (2006), and the Star Wars prequel trilogy (1999-2005), as well as the Marvel Cinematic Universe.Samuel Leroy Jackson was born in Washington, D.C., to Elizabeth (Montgomery) and Roy Henry Jackson. He was raised by his mother, a factory worker, and his grandparents.",
            'dob' => Carbon::create('1948-12-21'),
            'pob' => 'Washington D.C., USA' ,
            'image' => 'images/actor/samuel-jackson.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Benedict Cumberbatch',
            'gender'  => 'Male',
            'biography' => "Benedict Timothy Carlton Cumberbatch was born and raised in London, England. His parents, Wanda Ventham and Timothy Carlton (born Timothy Carlton Congdon Cumberbatch), are both actors. He is a grandson of submarine commander Henry Carlton Cumberbatch, and a great-grandson of diplomat Henry Arnold Cumberbatch CMG. Cumberbatch attended Brambletye School and Harrow School. Whilst at Harrow, he had an arts scholarship and painted large oil canvases. ",
            'dob' => Carbon::create('1976-07-19'),
            'pob' => 'Hammersmith, London, England, UK' ,
            'image' => 'images/actor/benedict-cumberbatch.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Zendaya',
            'gender'  => 'Female',
            'biography' => "Zendaya (which means 'to give thanks' in the language of Shona) is an American actress and singer born in Oakland, California. She began her career appearing as a child model working for Macy's, Mervyns and Old Navy. She was a backup dancer before gaining prominence for her role as Rocky Blue on the Disney Channel sitcom Shake It Up (2010) which also includes Bella Thorne, Kenton Duty and Roshon Fegan. Zendaya was a contestant on the sixteenth season of the competition series Dancing with the Stars.",
            'dob' => Carbon::create('1996-09-01'),
            'pob' => 'Oakland, California, USA' ,
            'image' => 'images/actor/zendaya.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Jacob Batalon',
            'gender'  => 'Male',
            'biography' => "Jacob Batalon is an American actor. Batalon achieved international recognition playing Ned Leeds in five Marvel Cinematic Universe superhero films, beginning with Spider-Man: Homecoming (2017). Jacob Batalon was born on October 9, 1996, in Hawaii, to Filipino parents. Batalon has seven half-siblings: a brother and a sister from his mother, and three brothers and two sisters from his father.",
            'dob' => Carbon::create('1996-10-09'),
            'pob' => 'Honolulu, Hawaii, USA' ,
            'image' => 'images/actor/jacob-batalon.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Daniel Craig',
            'gender'  => 'Male',
            'biography' => "One of the British theatre's most famous faces, Daniel Craig, who waited tables as a struggling teenage actor with the National Youth Theatre, has gone on to star as James Bond in Casino Royale (2006), Quantum of Solace (2008), Skyfall (2012), Spectre (2015) and No Time to Die (2021).He was born Daniel Wroughton Craig on March 2, 1968, at 41 Liverpool Road, Chester, Cheshire, England. His father, Timothy John Wroughton Craig, was a merchant seaman turned steel erector, and then became landlord of the 'Ring O'Bells' pub in Frodsham, Cheshire. His mother, Carol Olivia (Williams), was an art teacher.",
            'dob' => Carbon::create('1968-03-02'),
            'pob' => 'Chester, Cheshire, England, UK' ,
            'image' => 'images/actor/daniel-craig.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Chris Evans',
            'gender'  => 'Male',
            'biography' => "Christopher Robert Evans is an American actor, film producer, and director. Evans began his acting career in typical fashion: performing in school productions and community theatre.He was born in Boston, Massachusetts, the son of Lisa (Capuano), who worked at the Concord Youth Theatre, and G. Robert Evans III, a dentist. His uncle is former U.S. Representative Mike Capuano. Chris's father is of half German and half Welsh/English/Scottish ancestry, while Chris's mother is of half Italian and half Irish descent.",
            'dob' => Carbon::create('1981-06-13'),
            'pob' => 'Boston, Massachussets, USA' ,
            'image' => 'images/actor/chris-evans.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Christopher Plummer',
            'gender'  => 'Male',
            'biography' => "Legendary actor Christopher Plummer, perhaps Canada's greatest thespian, delivered outstanding performances as Sherlock Holmes in Murder by Decree (1979), the chilling villain in The Silent Partner (1978), the iconoclastic Mike Wallace in The Insider (1999), the empathetic psychiatrist in A Beautiful Mind (2001), the kindly and clever mystery writer in Knives Out (2019), and as Leo Tolstoy in The Last Station (2009). ",
            'dob' => Carbon::create('1929-12-13'),
            'pob' => 'Weston, Connecticut, USA' ,
            'image' => 'images/actor/christopher-plummer.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Lucas Black',
            'gender'  => 'Male',
            'biography' => "Lucas York Black was born on November 29, 1982, in Decatur, Alabama, to Jan (Keenum), an office worker, and Larry Black, a museum worker. Without any formal acting lessons, Lucas made his film debut with a small part in the Kevin Costner film The War (1994) at the age of 11. The small role helped him land his next job in the series American Gothic (1995). When the series went to North Carolina to cast its primary roles, the casting people in Wilmington remembered Lucas, and suggested him for the role of 'Caleb Temple.' Although the series didn't last too long, Lucas's film career did.",
            'dob' => Carbon::create('1982-11-29'),
            'pob' => 'Speake, Alabama, USA' ,
            'image' => 'images/actor/lucas-black.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Sung Kang',
            'gender'  => 'Male',
            'biography' => "Sung-Ho Kang is a Korean-American actor and producer from Clarkston, Georgia who is widely known for playing Han Lue from the Fast & Furious series of films and Better Luck Tomorrow. He also acted in Raya and the Last Dragon, Pearl Harbor, Ninja Assassin and Obi-Wan Kenobi. He is married to Miki Yim.",
            'dob' => Carbon::create('1972-04-08'),
            'pob' => 'Gainesvile, Georgia, USA' ,
            'image' => 'images/actor/sung-kang.jpg',
            'popularity' => 1500
        ]);

        Actor::create([
            'name' => 'Brian Tee',
            'gender'  => 'Male',
            'biography' => "Brian Tee can be seen as a series regular on the hit NBC television drama 'Chicago Med,' produced by Dick Wolf. Tee plays 'Dr. Ethan Choi,' the sexy doctor on rotation who found his calling in medicine while serving in the Navy. He is a tireless yet impulsive doctor who suffers from his own trauma while still maintaining his passion to save the sick. Tee is best known around the world for his starring role as the lead villain 'DK, the Drift King,' in Universal Pictures' 'The Fast and the Furious: Tokyo Drift,' directed by Justin Lin.On the big screen Tee has shared his talents in many giant blockbuster movies. ",
            'dob' => Carbon::create('1977-03-15'),
            'pob' => 'Okinawa, Japan' ,
            'image' => 'images/actor/brian-tee.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Lee Jung-jae',
            'gender'  => 'Male',
            'biography' => "Apart from being a top star in film and TV, Jung-Jae Lee also works as a highly successful fashion model. One year after his debut on television in 1993, Lee was cast in his first film, a feature by Bae Chang-ho. His breakthrough came in late 1998 in the award-winning film An Affair by E-J Yong. This was followed up by another success, City of the Rising Sun, for which he received a Best Actor award at the domestic Chungryong Awards ceremony.",
            'dob' => Carbon::create('1972-12-15'),
            'pob' => 'Seoul, South Korea' ,
            'image' => 'images/actor/lee-jae.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Park Hae-soo',
            'gender'  => 'Male',
            'biography' => "Park Hae-soo was born on 21 November 1981 in Suwon, Gyeonggi, South Korea. He is an actor, known for By Quantum Physics: A Nightlife Venture (2019), Squid Game (2021) and Time to Hunt (2020).",
            'dob' => Carbon::create('1981-11-21'),
            'pob' => 'Suwon, Gyeonggi, South Korea' ,
            'image' => 'images/actor/park-soo.jpg',
            'popularity' => 1800
        ]);

        Actor::create([
            'name' => 'Hoyeon',
            'gender'  => 'Female',
            'biography' => "South Korean model-turned-actor Hoyeon received international recognition and critical acclaim after the global success of the Netflix original series, Squid Game, in which she played Kan Sae-byeok, also known as Player 067. For her breakout performance on the show, Hoyeon won the Screen Actors Guild award for Outstanding Performance by a Female Actor in a Drama Series and earned a Primetime Emmy Award nomination for Outstanding Supporting Actress in a Drama Series.Hailing from Myeonmok-dong, a suburb of Seoul, Hoyeon began her career as a freelance model in 2011 walking in Seoul Fashion Week.",
            'dob' => Carbon::create('1994-06-23'),
            'pob' => 'Seoul, South Korea' ,
            'image' => 'images/actor/hoyeon.jpg',
            'popularity' => 1200
        ]);
    }
}
