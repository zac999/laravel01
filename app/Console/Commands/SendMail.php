<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send
                        {user : The receiver of mail}
                        {type : The type of mail}
                        {--I|send-now : Whether to send the mail immediately}
                        {--S|send-at=* : Specifies when to send}'; //命令签名

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '发送邮件'; //命令描述

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $a = $this->argument();
        // print_r($a);
       //echo $this->option('--send-at=');
       $n = $this->anticipate('{自动补全提示信息}',function($input){
        //返回自动完成配置
       });

        $name = $this->choice(
            '{提示信息}',
            ['{选项1}', '{选项2}'],
            $defaultIndex = null, //默认索引
            $maxAttempts = null, //最大尝试次数
            $allowMultipleSelections = false //是否支持多选
        );

        $choice = $this->choice('请选择你的数字',['2','1','0']);
        $this->line('开始处理任务...');
        $timers = [1, 2, 3, 4, 5
        ]; // 定义遍历数组

        $bar = $this->output->createProgressBar(count($timers)); // 创建进度条，并初始化步数
        $bar->start(); // 启动进度条

        // 遍历数组
        foreach ($timers as $timer) {
            sleep($timer);   // 程序处理逻辑
            $bar->advance(); // 推进进度条
        }

        $bar->finish(); // 结束进度条
        $this->newLine();
        $this->info('完成任务！');
    }
}
