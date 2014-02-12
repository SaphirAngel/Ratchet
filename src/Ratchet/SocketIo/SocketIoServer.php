<?php
namespace Ratchet\SocketIo;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Http\HttpServerInterface;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
/**
 * Created by PhpStorm.
 * User: SaphirAngel
 * Date: 12/02/14
 * Time: 10:01
 */

class SocketIoServer implements HttpServerInterface {
    /**
     * This is called before or after a socket is closed (depends on how it's closed).  SendMessage to $conn will not result in an error if it has already been closed.
     * @param  ConnectionInterface $conn The socket/connection that is closing/closed
     * @throws \Exception
     */
    function onClose(ConnectionInterface $conn)
    {
        echo "Connexion \n";
    }

    /**
     * If there is an error with one of the sockets, or somewhere in the application where an Exception is thrown,
     * the Exception is sent back down the stack, handled by the Server and bubbled back up the application through this method
     * @param  ConnectionInterface $conn
     * @param  \Exception $e
     * @throws \Exception
     */
    function onError(ConnectionInterface $conn, \Exception $e)
    {
        // TODO: Implement onError() method.
    }

    /**
     * @param \Ratchet\ConnectionInterface $conn
     * @param \Guzzle\Http\Message\RequestInterface $request null is default because PHP won't let me overload; don't pass null!!!
     * @throws \UnexpectedValueException if a RequestInterface is not passed
     */
    public function onOpen(ConnectionInterface $conn, RequestInterface $request = null)
    {
        var_dump($request);
    }

    /**
     * Triggered when a client sends data through the socket
     * @param  \Ratchet\ConnectionInterface $from The socket/connection that sent the message to your application
     * @param  string $msg The message received
     * @throws \Exception
     */
    function onMessage(ConnectionInterface $from, $msg)
    {
        var_dump($msg);
    }

}