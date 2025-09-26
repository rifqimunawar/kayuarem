<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'KIM JONG UN',
                'email' => 'hefi@mailinator.com',
                'subject' => 'Nesciunt facilis of',
                'message' => 'Bakar Bahil',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 23:40:04',
                'updated_at' => '2025-09-21 23:40:04',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Brianna Belton',
                'email' => 'briannawebsolution@gmail.com',
                'subject' => 'Re: Increase traffic to your website',
                'message' => 'Hello team, "kayuarem.com"

I just wanted to know if you require a better solution to manage SEO, SMO, SMM, PPC Campaigns, keyword research, Reporting etc.

Our main focus will be to help generate more sales & online traffic.

We can place your website on Google\'s 1st page. We will improve your website’s position on Google and get more traffic.

If you are interested, then we can send you our past work details, client testimonials, price list and an affordable quotation with the best offer.


Thank you,
Brianna Belton',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 16:01:00',
                'updated_at' => '2025-09-23 16:01:00',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Daniel Edwards',
                'email' => 'daniel.websolution11@gmail.com',
                'subject' => 'Question about your website',
                'message' => 'Hello,

Following the completion of your website, we conducted a quick backend check to ensure everything was functioning smoothly. However, the results revealed that your website is currently not appearing on major search engines like Google and Bing when relevant keywords related to your business are searched.

This is primarily due to the lack of proper SEO (Search Engine Optimization), which is currently incomplete. Without it, your website will struggle to appear in search results, meaning your target audience won’t be able to find you and your site won’t receive the traffic or conversions it was designed to generate.

Please share your phone number and a convenient time for a brief call. We’d be happy to guide you on how we can help you attract more traffic.

Thanks,
Daniel Edwards',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 20:53:49',
                'updated_at' => '2025-09-23 20:53:49',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Nikita',
                'email' => 'nikita@rocketdigitaltech.com',
                'subject' => 'Re Improve traffic to your website',
                'message' => 'Hello http://kayuarem.com,

I checked your website. You have an impressive site but ranking is not good on Google, Yahoo and Bing.

Would you like to optimize your site?

If you’re interested, then I will send you SEO Packages and strategies.

Can I send?

Warm regards,
Nikita',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 23:22:34',
                'updated_at' => '2025-09-23 23:22:34',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Nikita',
                'email' => 'nikita@rocketdigitaltech.com',
                'subject' => 'Re Improve traffic to your website',
                'message' => 'Hello http://kayuarem.com,

I checked your website. You have an impressive site but ranking is not good on Google, Yahoo and Bing.

Would you like to optimize your site?

If you’re interested, then I will send you SEO Packages and strategies.

Can I send?

Warm regards,
Nikita',
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 20:49:43',
                'updated_at' => '2025-09-25 20:49:43',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Firdaus',
                'email' => 'firdausnurhariyanto@gmail.com',
                'subject' => 'Test',
                'message' => 'aku mau po 10000 tatakan minum',
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 22:17:07',
                'updated_at' => '2025-09-25 22:17:07',
            ),
        ));
        
        
    }
}