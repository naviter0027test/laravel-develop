<?php

//use App\News;
use Illuminate\Database\Seeder;

class NewsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$news = new News;
        for($i = 0;$i < 20; ++$i) {
            DB::table('news')->insert([
                'title' => "'". $this->cht_random(0, rand(10, 20)). "'",
                'content' => "'". $this->cht_random(rand(0, 20), rand(50, 160)). "'",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
            sleep(0.5);
            //$news->title = $this->cht_random(0, rand(10, 20));
            //$news->content = $this->cht_random(rand(0, 20), rand(50, 160));
            //$news->created_at = date("Y-m-d H:i:s");
            //$news->save();
        }
    }

    public function cht_random($start, $end) 
    {
        $str = "更公少：信是臺，是面不資接成著雨音寶連遊念日，當當留照方不約血將著定奇考，手專亮術學賽有我？認們年度！學意為，香時時興；發訴創長想我來音四女標？深看是到心難體系下，口在大有示好加方紅化。一高外親所你就親上在：就是間劇標式：且元廣吸一效……示人影道部、會在市樓生保點曾的價林，羅北得的氣，見家前漸！不關特！很濟是供角並不中度男雖一們時成花，經然有！業食我有去多也花了用在小漸不不可吃活便高動口變無朋出知成個依、場她謝？線開字食沒書舉確痛花金城但強之死社河、散事長全一然生，試門家了金；演量病：形石像！計一公。合孩背分萬現弟這不車們，遠她人陽停親……生特一去間讀要次見說英然不個氣成元北停不理之年孩車構展子，事活你味可可們的：多老但別可在電富不需有們金的，我後數環士海熱家部世局下致國二站他來是改邊家然極應下個，有那依識是熱問；傳件花色！以還之說創法的的只。好王公營……當行較什青車園三水。正的本？壓是線也一此與清高慢，十如過信望術重組應場一、著師些素安，白地的讓，木過長細係素地向快金品心放積良萬有在童元年去育當作成年各作大？外多雲常明北受計加。是他家名故平，至中工為在答反積本定識，一了斷前來力修門門之子！想視議有真顧其車形千；新心打時清客學料，所個好！計就一總買有無自他系皮技足與風近簡時政，後令神，知廣小加過只正備球藥因近客帶色是，女只先下場當內三己現文水民展兒業天面全取筆；目邊土放上善那例頭大們力理水一議文過統同城是人人也。";
        return substr($str, $start *3, $end *3);
    }
}
