<?php

namespace NotificationChannels\Twilio;

interface MessageSenderInterface {
    public function sendMessage(
        TwilioMessage $message,
        ?string $to,
        bool $useAlphanumericSender = false
    );

    public function getConfig(): ?TwilioConfig;
}
