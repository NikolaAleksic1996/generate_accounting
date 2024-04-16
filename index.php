<?php

require 'Reservation.php';
require 'Payment.php';

$reservation = new Reservation(
    1,
    104.00,
    DateTime::createFromFormat('d.m.Y', '08.08.2022'),
    DateTime::createFromFormat('d.m.Y', '15.08.2022'),
    'EUR'
);

$totalAmount = $reservation->getTotalPrice();

$payment1 = new Payment(
    'Akontacija',
    'Kreditnom karticom (Visa, EC/MC, Maestro)',
    DateTime::createFromFormat('d.m.Y H:i', '08.08.2022 11:00'),
    364
);

$payment2 = new Payment(
    'Ostatak iznosa',
    'Kreditnom karticom (Visa, EC/MC, Maestro)',
    DateTime::createFromFormat('d.m.Y H:i', '08.08.2022 15:00'),
    364
);

echo $payment1->getPaymentDate()->format('d.m.Y H:i') . '<br>' . $totalAmount;
echo "Hello World!";